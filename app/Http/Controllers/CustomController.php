<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStatus;
use App\Models\Comment;
use App\Models\Employer;
use App\Models\Post;
use App\Models\PostsEmployee;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Pagination\Paginator;


class CustomController extends Controller
{

    public function users()
    {
        $users = User::all();
        return view('admin.manage.users', compact('users'));
    }
    //
    public function usersdetails($id)
    {

        $user = User::findOrFail($id);
        return view('admin.manage.detalisUser', compact('user'));
    }

    public function usersdelete($id)
    {

        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully!');
    }


    public function employers()
    {
        $employers = Employer::all();
        return view('admin.manage.employers', compact('employers'));
    }
    //
    public function employersdetails($id)
    {

        $employer = Employer::findOrFail($id);
        return view('admin.manage.detalisEmployer', compact('employer'));
    }

    public function employersdelete($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();
        return redirect()->back()->with('success', 'Employer deleted successfully!');
    }
    public function index(Request $request)
    {
        $status = $request->query('status');

        if ($status) {
            $posts = Post::where('status', $status)->get();
        } else {
            $posts = Post::paginate(9);
        }

        return view('admin.index', compact('posts'));
    }

    public function details($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);
        return view('admin.details', compact('post'));
    }

    public function DeleteComment($id)
    {

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
    public function employerSendMail($id){
        $postsEmployee= PostsEmployee::findOrFail($id);
        $post = Post::findOrFail($id);
        return view('employer.sendMail', compact('postsEmployee', 'post'));
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
    public function employerMail(Request $request, $id)
    {
        // $contact = PostsEmployee::find($id);
        // $userContact = $contact->user;

        $contact = User::find($id);
        // dd($contact);
       
        $details = [
            'mail_greeting' => $request->mail_greeting,
            'mail_body' => $request->mail_body,
            'mail_action_text' => $request->mail_action_text,
            'mail_action_url' => $request->mail_action_url,
            'mail_end_line' => $request->mail_end_line,
        ];

        Notification::send($contact, new SendEmailNotification($details));
        return to_route('employer.index');
    }
}


