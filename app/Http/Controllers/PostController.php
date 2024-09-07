<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('Employer')->except(['index', 'show', 'addComment', 'DeleteComment']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::paginate(10);
        return view('Post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('Post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        //
        $post = $request->validated();
        Post::create($post);
        return to_route('post.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
        return view('Post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $categories = Category::all();
        return view('Post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {

        $post->update($request->validated());
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
        $post->delete();
        return to_route('post.index');
    }

    public function addComment(Request $request, $id)
    {

        $post = Post::findOrFail($id);

        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user_id = Auth::id();

        $post->comments()->save($comment);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function DeleteComment($id)
    {

        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }

    public function editComment(Request $request, $id)
{
    // التحقق من المدخلات
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
        'password' => ['nullable', 'string', 'min:8', 'confirmed'], // كلمة المرور اختيارية
        'phone_number' => ['required', 'string', 'max:15'],
        'gender' => ['required', 'in:male,female'],
        'birth_date' => ['required', 'date'],
        'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // الصورة اختيارية
    ]);

    // تحقق من فشل التحقق
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // العثور على المستخدم المراد تحديثه
    $user = Employer::findOrFail($id);

    // إدارة رفع الصورة في حالة تقديم صورة جديدة
    if ($request->hasFile('image')) {
        // حذف الصورة القديمة إذا كانت موجودة
        if ($user->image) {
            $oldImagePath = public_path('images/user_images/' . $user->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // حذف الصورة القديمة
            }
        }

        // رفع الصورة الجديدة
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/user_images'), $imageName);
        $user->image = $imageName; // تحديث الصورة في قاعدة البيانات
    }

    // تحديث البيانات الأخرى
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone_number = $request->phone_number;
    $user->gender = $request->gender;
    $user->birth_date = $request->birth_date;

    // تحديث كلمة المرور فقط إذا تم إدخال كلمة مرور جديدة
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // حفظ التحديثات
    $user->save();

    // إعادة التوجيه بعد التحديث
    return redirect()->back()->with('success', 'Profile updated successfully');
}
}
