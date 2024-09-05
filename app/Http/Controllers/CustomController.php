<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatus;
use App\Models\Comment;
use App\Models\Employer;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class CustomController extends Controller
{
    //
    // public function index()
    // {
    //     $posts = Post::all();
    //     return view('admin.index', compact('posts'));
    // }

    public function index(Request $request)
    {
        $status = $request->query('status');

        if ($status) {
            $posts = Post::where('status', $status)->get();
        } else {
            $posts = Post::all();
        }

        return view('admin.index', compact('posts'));
    }

    public function details($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);
        return view('admin.details', compact('post'));
    }

    public function DeleteComment($id){

        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }

    public function update(UpdateStatus $request, $id)
    {
        $request_data = $request->validated();
        $post = Post::findOrFail($id);
        $post->status = $request_data['status'];
        $post->save();
        return view('admin.sendMail', ['posts' => $post])->with('success', 'Status updated successfully!');
    }

    public function mail(Request $request, $id)
    {
        $contact = Employer::find($id);

        $details = [
            'mail_greeting' => $request->mail_greeting,
            'mail_body' => $request->mail_body,
            'mail_action_text' => $request->mail_action_text,
            'mail_action_url' => $request->mail_action_url,
            'mail_end_line' => $request->mail_end_line,
        ];
        Notification::send($contact, new SendEmailNotification($details));
        return to_route('admin.index');
    }
}
