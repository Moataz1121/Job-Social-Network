<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Post;
use App\Models\PostsEmployee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $jobPosts = Post::where('status', 'accepted')->paginate(5);
        return view('employee.user.job', ['jobPosts' => $jobPosts, 'categories' => $categories]);
    }

    public function filter_category($id)
    {
        $categories = Category::all();

        $category = Category::findOrFail($id);
        $posts = $category->posts()->where('status', 'accepted')->paginate(5);
        return view('employee.user.filter_category', compact('posts', 'categories'));
    }

    public function apply($id, Request $request)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $request_data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'resume' => 'required|mimes:pdf',
            'phone_number' => 'required',
        ]);
        $resume_path = null;
        if ($request->hasFile('resume')) {
            $resume_name = time() . '.' . $request->file('resume')->getClientOriginalExtension();
            $request->file('resume')->move(public_path('images/employee_resume'), $resume_name);
            $resume_path = 'images/employee_resume/' . $resume_name;
        }

        $request_data['resume'] = $resume_path;
        $request_data['user_id'] = Auth::user()->id;
        $request_data['post_id'] = $post->id;

        PostsEmployee::create($request_data);

        return to_route('employee.job', ['post' => $post, 'categories' => $categories]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        $search = $request->validate([
            'search' => 'nullable|string|max:255',
        ]);
        $search = $request->input('search');
        if ($search == null) {
            $posts = Post::where('status', 'accepted')->paginate(5);

            return view('employee.user.job', ['jobPosts' => $posts, 'categories' => $categories]);
        }
        $posts = Post::query()
            ->where('status', 'accepted')
            ->when($search, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%")
                        ->orWhere('salary', 'like', "%{$search}%")
                        ->orWhere('work_type', 'like', "%{$search}%")
                        ->orWhere('created_at', 'like', "%{$search}%");
                });
            })->paginate(5);

        return view('employee.user.job', ['jobPosts' => $posts, 'categories' => $categories]);
    }


    public function showProfileDetails()
    {
        $user = Auth::user();
        // $posts = PostsEmployee::where('user_id', $user->id)->get();
        $posts = PostsEmployee::where('user_id', $user->id)->with('post')->get();
        return view('employee.user.profile', compact('user', 'posts'));
    }
    public function cancel($id)
    {
        $post = PostsEmployee::find($id);
        $post->delete();
        return to_route('employee.profile');
    }

    public function editProfile()
    {
        $categories = Category::all();
        $user = Auth::guard('web')->user();
        return view('employee.user.layouts.editprofile', compact('user', 'categories'));
    }

    public function updateprofile(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['nullable'],
            'phone_number' => ['required'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'image' => ['nullable'],
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($user->image) {
                $oldImagePath = public_path('images/user_images/' . $user->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/user_images'), $imageName);
            $user->image = $imageName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->birth_date = $request->birth_date;
        $user->gender = $request->gender;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return to_route('employee.profile');
    }
}
