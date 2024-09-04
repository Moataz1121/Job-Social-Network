<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Post;
use App\Models\PostsEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPosts = Post::where('status', 'accepted')->paginate(5);
        return view('employee.user.job', ['jobPosts' => $jobPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */

    // public function apply($id , Request $request){
    //     $post = Post::find($id);
    //     // dd($request->all());
    //     // if ($request->hasFile('resume')) {
    //     //     # code...
    //     //     // $request->file('resume')->storeAs('public/resume', $request->file('resume')->getClientOriginalName());
    //     //     // $request_data['resume'] = $request->file('resume')->getClientOriginalName();
    //     //     $resume = $request->file('resume');
    //     //     $resume_path = $resume->store('resume' , 'employee_resume');
    //     // }
    //     // $request_data = $request->all();
    //     // $request['resume'] = $resume_path . time();
    //     // $request_data['user_id'] = Auth::user()->id;
    //     // $request_data['post_id'] = $post->id;

    //     $resume_path = null;

    //     if (isset($request['resume'])) {
    //         $resume_path = time() . '.' . $request['resume']->extension();
    //         $request['resume']->move(public_path('images/employee_resume'), $resume_path);
    //     }
    //     $request_data['user_id'] = Auth::user()->id;
    //     $request_data['post_id'] = $post->id;


    //     $request_data = $request->validate([
    //         'user_id' => 'required',
    //         'post_id' => 'required',
    //         'resume' => 'required|mimes:pdf',
    //         // 'phone_numer'=> 'required',
    //     ]);
     
    //     // dd($request_data);
    //     PostsEmployee::create($request_data);

    //    return view('employee.user.apply', ['post' => $post]); 
    // }

    public function apply($id , Request $request){
        $post = Post::find($id);
    
        $request_data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'resume' => 'required|mimes:pdf',
            'phone_number'=> 'required',
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
    
        return view('employee.user.apply', ['post' => $post]); 
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
    $search = $request->input('search');
    $posts = Post::query()
        ->when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%");
        })-> paginate(5);

    return view('employee.user.job', ['jobPosts' => $posts]);
    //return view('posts.index', compact('posts'));
}
}