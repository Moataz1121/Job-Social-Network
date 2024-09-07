@extends('admin.master')
@section('title', 'Send Mail')
@section('content')
    <h1 class="mt-3 text-center">Send mail to {{ $posts->employer->name }}</h1>
    <form action="{{ route('send.mail', $posts->employer->id) }}" method="GET">
        @csrf
        <div class="mb-3 bg-light p-5 rounded shadow">
            <div class="row">
                <div class="col-12 mb-5">
                    <label class="form-label" for="title">Mail Greeting</label>
                    <input type="text" id="title" name="mail_greeting" class="form-control" placeholder="Mail title">
                </div>
                <div class="col-12 mb-5">
                    <label class="form-label" for="body">Mail Body</label>
                    <textarea id="body" name="mail_body" class="form-control" style="height: 120px" cols="30" rows="10"></textarea>
                </div>
                <div class="col-4 mb-3">
                    <label class="form-label" for="actionText">Action Text</label>
                    <input type="text" id="actionText" name="mail_action_text" class="form-control">
                </div>
                <div class="col-4">
                    <label class="form-label" for="actionUrl">Action Url</label>
                    <input type="text" id="actionUrl" name="mail_action_url" class="form-control">
                </div>
                <div class="col-4">
                    <label class="form-label" for="endLine">End Line</label>
                    <input type="text" id="endLine" name="mail_end_line" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success fs-5">Send Mail</button>
    </form>
@endsection
