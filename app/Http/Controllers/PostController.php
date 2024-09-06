<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

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
    public function editComment($id, Request $request)
    {

        $comment = Comment::findOrFail($id);
        $request->validate([
            'body' => 'required',

        ]);
        //$comment->update($request->validated());
        $comment->body = $request->input('body');
        $comment->save();
        return redirect()->back();
    }
}
