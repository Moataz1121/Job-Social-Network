<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatus;
use App\Models\Post;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    //
    public function index(){
        $posts = Post::get()->where('status' , 'pending');
        return view('admin.index' , compact('posts'));
    }

    public function details($id){
        $post = Post::findOrFail($id);
        return view('admin.details' , compact('post'));
    }

    public function update(UpdateStatus $request, $id)
    {
        $request_data = $request->validated();
        $post = Post::findOrFail($id);
        $post->status = $request_data['status'];
        $post->save();
        return to_route('admin.index', ['posts' => $post])->with('success', 'Status updated successfully!');
    }
    
    
    
}

