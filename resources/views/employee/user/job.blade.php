@extends('employee.user.master')

@section('content')
    <form action="{{ route('jobs.search') }}" method="GET" class="mb-3 d-flex justify-content-center">
        <input type="text" name="search" placeholder="Search jobs" class="form-control w-75 me-3">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    @foreach ($jobPosts as $jobPost)
        <div style="" class="mx-5 mb-3">
            <div class="post border-bottom p-3 bg-white w-shadow">
                <div class="media text-muted pt-1">
                    <img src="{{ asset('images/employer_images/' . $jobPost->employer->image) }}" alt="Online user"
                        height="58" width="53" class="mr-3 post-user-image">
                    <div class="media-body pb-3 mb-0 small lh-125">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="post-type text-muted"><a href="#" class="text-gray-dark post-user-name mr-2">
                                    {{ $jobPost->employer->name }}
                                </a></span>
                            <div class="dropdown">
                                <a href="#" class="post-more-settings" role="button" data-toggle="dropdown"
                                    id="postOptions" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left post-dropdown-menu">
                                    <a href="#" class="dropdown-item" aria-describedby="savePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-bookmark-plus post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Save post</span>
                                                <small id="savePost" class="form-text text-muted">Add this to your saved
                                                    items</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="hidePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-hide post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Hide post</span>
                                                <small id="hidePost" class="form-text text-muted">See fewer posts like
                                                    this</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-time post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Snooze Arthur for 30 days</span>
                                                <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing
                                                    posts</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="reportPost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-block post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Report</span>
                                                <small id="reportPost" class="form-text text-muted">I'm concerned about this
                                                    post</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block">{{ $jobPost->created_at }} <i class='bx bx-globe ml-3'></i></span>
                    </div>
                </div>
                <div class="mb-2">
                    <input type="checkbox" name="load_more" class="loadMore" id="loadMore{{ $jobPost->id }}">
                    <p class="mt-3 fs-3"><b>Title: </b>{{ $jobPost->title }}</p>
                    <p class="mb-3">{{ $jobPost->description }}</p>
                    <div id="job-content" class="job-content">
                        <p class="mb-0"><b>Requirement:</b></p>
                        <ul>
                            @foreach (explode('-', $jobPost->skills) as $key => $skill)
                                @if ($key > 0)
                                    <li>{{ $skill }}</li>
                                @endif
                            @endforeach
                        </ul>
                        <p> <b>Location: </b>{{ $jobPost->location }} </p>
                        <p> <b>Work Type: </b>{{ $jobPost->work_type }} </p>
                        <p> <b>Deadline for hiring: </b>{{ $formatDate = date('l dS F o', strtotime($jobPost->deadLine)) }}
                        </p>
                        <p> <b>Salary: </b>{{ $jobPost->salary }} </p>
                        {{-- <a href="" class="btn btn-primary">Apply</a>   --}}

                        {{-- Start apply --}}
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">
                            Apply Now
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="applyModalLabel">Confirm Apply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form action="{{ route('employee.apply', $jobPost->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="post_id" value="{{ $jobPost->id }}">

                                            <label for="" class="form-label">Name</label>
                                            <input value="{{ Auth::user()->name }}" type="text" name="name"
                                                class="form-control" id="">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <label for="" class="form-label mt-3">Email</label>
                                            <input value="{{ Auth::user()->email }}" type="text" class="form-control"
                                                id="" name="email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <label for="" class="form-label mt-3">Phone</label>
                                            <input type="text" name="phone_number"
                                                value="{{ Auth::user()->phone_number }}" class="form-control"
                                                id="">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <label for="" class="form-label mt-3">Resume</label><input
                                                type="file" class="form-control" id=""
                                                name="resume"></label>
                                            @error('resume')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Confirm
                                                    Application</button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal Footer -->

                                </div>
                            </div>
                        </div>

                        {{-- End aplly --}}
                    </div>
                    <label for="loadMore{{ $jobPost->id }}" class="cursor-pointer">Read more...</label>
                </div>
                <div class="d-block mt-3">
                    <img src="front/assets/images/users/post/post-1.jpg" class="w-100 mb-3" alt="post image">
                </div>
                <div class="mb-2">

                    <!-- Reactions -->
                    <div class="row">
                        <div class="argon-reaction col-md-4 text-center">
                            <span class="like-btn">
                                <a href="#" class="post-card-buttons" id="reactions"><i
                                        class='bx bxs-like mr-2'></i>
                                </a>
                                <ul class="reactions-box dropdown-shadow">
                                    <li class="reaction reaction-like" data-reaction="Like"></li>
                                    <li class="reaction reaction-love" data-reaction="Love"></li>
                                    <li class="reaction reaction-haha" data-reaction="HaHa"></li>
                                    <li class="reaction reaction-wow" data-reaction="Wow"></li>
                                    <li class="reaction reaction-sad" data-reaction="Sad"></li>
                                    <li class="reaction reaction-angry" data-reaction="Angry"></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-4   text-center">
                            <a href="javascript:void(0)" class="post-card-buttons" id="show-comments"><i
                                    class='bx bx-message-rounded mr-2'></i>{{ count($jobPost->comments) }}</a>
                        </div>
                        <div class="col-md-4  text-center">
                            <div class="dropdown dropup share-dropup">
                                <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class='bx bx-share-alt mr-2'></i>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-menu post-dropdown-menu">
                            <a href="#" class="dropdown-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class='bx bx-share-alt'></i>
                                    </div>
                                    <div class="col-md-10">
                                        <span>Share Now (Public)</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class='bx bx-share-alt'></i>
                                    </div>
                                    <div class="col-md-10">
                                        <span>Share...</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class='bx bx-message'></i>
                                    </div>
                                    <div class="col-md-10">
                                        <span>Send as Message</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-top pt-3 hide-comments" style="display: none;">
                    <div class="row bootstrap snippets">
                        <div class="col-md-12">
                            <div class="comment-wrapper">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <ul class="media-list comments-list">
                                            <li class="media comment-form">
                                                <a href="#" class="pull-left">
                                                    <img src="{{ asset('admin') }}assets/images/users/user-4.jpg"
                                                        alt="" class="img-circle">
                                                </a>
                                                {{-- Adding Comment --}}
                                                <div class="media-body">
                                                    <form action="{{ route('posts.addComment', $jobPost->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="body"
                                                                        value="{{ old('body') }}"
                                                                        class="form-control comment-input"
                                                                        placeholder="Write a comment...">
                                                                    <div class="input-group-btn">
                                                                        <button type="submit"
                                                                            class="btn text-primary comment-form-btn"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Tooltip on top"><i
                                                                                class="fa fa-paper-plane"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </li>
                                            @foreach ($jobPost->comments as $comment)
                                                <li class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="{{ asset('images/user_images/' . $comment->user->image) }}"
                                                            alt="" class="img-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            <strong class="text-gray-dark"><a href="#"
                                                                    class="fs-8">{{ $comment->user->name }}</a></strong>
                                                            <div
                                                                class="d-flex flex-column justify-content-center align-items-center">
                                                                @can('delete-comment', $comment)
                                                                    <div class="commentLR ">
                                                                        <form
                                                                            action="{{ route('comments.delete', $comment->id) }}"
                                                                            method="POST" style="display:inline;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-link fs-8"
                                                                                onclick="return confirm('Are you sure you want to delete this comment?')">
                                                                                <i class="fas text-danger fa-trash-alt"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @endcan

                                                                @can('delete-comment', $comment)
                                                                    <div class="commentEdit">
                                                                        <button type="button" class="btn btn-link fs-8 "
                                                                            onclick="document.getElementById('edit-comment-{{ $comment->id }}').style.display='block'">
                                                                            <i class="fas text-primary fa-edit"></i>
                                                                        </button>
                                                                    </div>

                                                                    <form id="edit-comment-{{ $comment->id }}"
                                                                        action="{{ route('comments.edit', $comment->id) }}"
                                                                        method="POST" style="display:none;">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <input type="text" name="body"
                                                                                class="form-control"
                                                                                value="{{ $comment->body }}" required>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save</button>
                                                                    </form>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="d-block comment-created-time">{{ $comment->created_at->format('F j, Y, g:i a') }}</span>
                                                        <p class="fs-8 pt-2">
                                                            {{ $comment->body }}
                                                        </p>

                                                    </div>
                                                </li>
                                            @endforeach
                                            {{-- end comment --}}
                                            <li class="media">
                                                <div class="media-body">
                                                    <div class="comment-see-more text-center">
                                                        <button type="button" class="btn btn-link fs-8">See More</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $jobPosts->links() }}
    </div>
@endsection
