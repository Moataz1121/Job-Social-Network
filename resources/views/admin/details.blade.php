@extends('admin.master')
@section('title', 'Post Details')
<head>
    <title>
        Admin | Post
    </title>
    <style>
        .item1 {
            grid-area: header;
            height: 15.625rem;
            width: 62.5rem;
        }

        .item2 {
            grid-area: menu;
            width: 23.125rem;
            height: 27.5rem;
        }

        .item3 {
            grid-area: main;
            height: fit-content;
        }

        .item4 {
            grid-area: comment;
        }

        .grid {
            display: grid;
            grid-template-areas:
                'header header header header menu menu'
                'main main main main menu menu'
                'main main main main comment comment';
        }
    </style>
</head>


@section('content')
    <div class="grid h-75 mt-3">
        <div class="item1 mb-3 my-0 bg-light me-3 rounded p-5 shadow">
            <div class="mb-4">
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->category->name }}</h5>
            </div>
            <div class="d-flex mb-2">
                <h5 class="me-4"><i class="fa-regular fa-calendar-days me-2"></i>Post Date: <small class="text-info">
                        {{ $post->created_at->format('D, dS M Y') }}</small></h5>
                <h5 class="me-4"><i class="fa-regular fa-calendar-days me-2"></i>Post End: <small class="text-info">
                        {{ date('D, dS M Y', strtotime($post->deadLine)) }}</small></h5>
                <h5 class="me-4"><i class="fa-regular fa-user me-2"></i>Employer: <small class="text-info">
                        {{ Str::apa($post->employer->name) }}</small></h5>

            </div>
            <div class="d-flex">
                <h5 class="me-4"><i class="fa-regular fa-building me-2"></i>Company name: <small class="text-info">
                        {{ Str::apa($post->employer->company_name) }}</small></h5>
                <h5 class="me-4"><i class="fa-solid fa-at me-2"></i>Employer email: <small class="text-info">
                        {{ $post->employer->email }}</small></h5>
                <h5 class="me-4"><i class="fa-solid fa-phone me-2"></i>Phone: <small class="text-info">
                        {{ $post->employer->phone_number }}</small></h5>
            </div>
        </div>
        <div class="item2 bg-light rounded p-5 shadow">

            {{-- @if ($post->status == 'pending') --}}
                <div class="mb-5">
                    <form action="{{ route('admin.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        @error('status')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <div>
                            <select class="form-select form-control" name="status" aria-label="Default select example">
                                <option disabled value="{{ $post->status }}">{{ $post->status }}</option>
                                <option value="accepted">Accept</option>
                                <option value="rejected">Reject</option>
                            </select>
                            <input type="submit" class="btn btn-primary mt-3 fs-5 w-100" height="12.5rem"
                                value="Submit & Mail">
                        </div>
                    </form>
                </div>
            {{-- @elseif ($post->status == 'accepted') --}}
           
            <div class="mb-4">
                <h5 class="mb-2 me-4"><i class="fa-solid fa-briefcase me-4 text-danger"></i>Job Type</h5>
                @if ($post->work_type === 'onSite')
                    <p class="text-secondary" style="margin-left: 2.5rem">On Site</p>
                @elseif ($post->work_type === 'Hybrid')
                    <p class="text-secondary" style="margin-left: 2.5rem">Hybrid</p>
                @elseif ($post->work_type === 'Remote')
                    <p class="text-secondary" style="margin-left: 2.5rem">Remote</p>
                @endif
            </div>
            <div class="mb-4">
                <h5 class="mb-2 me-4"><i class="fa-regular fa-money-bill-1 me-3 text-danger"></i>Salary</h5>
                <p class="text-secondary" style="margin-left: 2.5rem">{{ $post->salary }}$</p>
            </div>
            <div class="mb-4">
                <h5 class="mb-2 me-4"><i class="fa-solid fa-location-dot me-4 text-danger"></i>Location</h5>
                <p class="text-secondary" style="margin-left: 2.5rem">{{ $post->location }}</p>
            </div>
        </div>
        <div class="item3 bg-light me-3 rounded p-5 shadow">
            <div class="mb-5">
                <h4 class="mb-3">Description</h4>
                <p>{{ $post->description }}</p>
            </div>
            <div>
                <h4 class="mb-3">Requirement</h4>
                <p>{!! nl2br($post->skills) !!}</p>
            </div>
        </div>
        <div class="item4 bg-light mt-3 mb-5 rounded p-4 shadow">
            <div class="card">
                <div class="card-header">
                    <h4>Comments</h4>
                </div>
                <div class="card-body">
                    @if ($post->comments->count() > 0)
                        @foreach ($post->comments as $comment)
                            <div class="d-flex justify-content-between aligin-items-center">
                                <div class="comment mb-3">
                                    <strong>{{ Str::apa($comment->user->name) }}:</strong>
                                    <p>{{ $comment->body }}</p>
                                </div>
                                <div class="commentLR">
                                    <form action="{{ route('comments.delete', $comment->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link btn-danger fs-8"
                                            onclick="return confirm('Are you sure you want to delete this comment?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No comments yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
