<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="front/assets/images/logo-16x16.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@1.9.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Styles -->
    <link href="front/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="front/assets/css/style.css" rel="stylesheet">
    <link href="front/assets/css/components.css" rel="stylesheet">
    <link href="front/assets/css/profile.css" rel="stylesheet">
    <link href="front/assets/css/media.css" rel="stylesheet">
    <script src="front/assets/js/load.js" type="text/javascript"></script>
</head>

<body class="profile">

    <div class="container-fluid newsfeed d-flex" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 p-0">
                <nav class="container-fluid nav navbar navbar-light bg-light shadow-sm sticky-top">
                    <ul class="nav navbar container-fluid">
                        <ul class="d-content nav">
                            <li class="nav-item" style="margin-left: 10px">
                                <a class="btn btn-outline-dark nav-link"
                                    href="{{ route('employee.profile') }}">Profile</a>
                            </li>
                            <li class="nav-item" style="margin-left: 10px">
                                <a class="btn btn-outline-dark nav-link" href="{{ route('employee.job') }}">Posts
                                    Jobs</a>
                            </li>
                            <li class="nav-item" style="margin-left: 10px">
                                <a class="btn btn-outline-dark nav-link" href="{{ route('employee.editProfile') }}">Edit
                                    Profile</a>
                            </li>
                        </ul>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-3">
                                    <a class="btn btn-outline-dark nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item me-3">
                                    <a class="btn btn-outline-dark nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="btn btn-outline-danger nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        @endguest
                    </ul>
                </nav>

                <div class="row profile-right-side-content">
                    <div class="user-profile">
                        <div class="profile-header-background">
                            <a href="#" class="profile-cover">
                                <img src="front/assets/images/users/cover/cover-1.gif" alt="Profile Header Background">
                                <div class="cover-overlay">
                                    <a href="#" class="btn btn-update-cover"><i class='bx bxs-camera'></i> Update
                                        Cover Photo</a>
                                </div>
                            </a>
                        </div>
                        <div class="row profile-rows">
                            <div class="col-md-3">
                                <div class="profile-info-left">
                                    <div class="text-center">
                                        <div class="profile-img w-shadow">
                                            <div class="profile-img-overlay"></div>
                                            <img src="{{ asset('images/user_images/' . Auth::user()->image) }}"
                                                alt="Avatar" class="avatar img-circle rounded overflow-hidden">
                                            <div class="profile-img-caption">
                                                <label for="updateProfilePic" class="upload">
                                                    <i class='bx bxs-camera'></i> Update
                                                    <input type="file" id="updateProfilePicInput"
                                                        class="text-center upload">
                                                </label>
                                            </div>
                                        </div>
                                        <p class="profile-fullname mt-3">{{ Auth::user()->name }}</p>
                                        <p class="profile-username mb-3 text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="intro mt-4">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-follow mr-3"><i
                                                    class='bx bx-plus'></i> Follow</button>
                                            <button type="button" class="btn btn-start-chat" data-toggle="modal"
                                                data-target="#newMessageModal"><i class='bx bxs-message-rounded'></i>
                                                <span class="fs-8">Message</span></button>
                                            <button type="button" class="btn btn-follow" id="moreMobile"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                    class='bx bx-dots-horizontal-rounded'></i> <span
                                                    class="fs-8">More</span></button>
                                            <div class="dropdown-menu dropdown-menu-right profile-ql-dropdown"
                                                aria-labelledby="moreMobile">
                                                <a href="#" class="dropdown-item">Timeline</a>
                                                <a href="#" class="dropdown-item">About</a>
                                                <a href="#" class="dropdown-item">Followers</a>
                                                <a href="#" class="dropdown-item">Following</a>
                                                <a href="#" class="dropdown-item">Photos</a>
                                                <a href="#" class="dropdown-item">Videos</a>
                                                <a href="#" class="dropdown-item">Check-Ins</a>
                                                <a href="#" class="dropdown-item">Events</a>
                                                <a href="#" class="dropdown-item">Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro mt-5 mv-hidden">
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <h3 class="intro-about">Intro</h3>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i
                                                    class='bx bx-briefcase text-primary'></i> Web Developer at <a
                                                    href="#">Company Name</a></p>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i class='bx bx-map text-primary'></i>
                                                Lives in <a href="#">City, Country</a></p>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i class='bx bx-time text-primary'></i>
                                                Last Login <a href="#">Online <span
                                                        class="ml-1 online-status bg-success"></span></a></p>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-quick-link join-group-btn border w-100">Edit Details</a>
                                        </div>
                                    </div>
                                    <div class="intro mt-5 row mv-hidden">
                                        <div class="col-md-4">
                                            <img src="front/assets/images/users/album/album-1.jpg" width="95"
                                                alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="front/assets/images/users/album/album-2.jpg" width="95"
                                                alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="front/assets/images/users/album/album-3.jpg" width="95"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="intro mt-5 mv-hidden">
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <h3 class="intro-about">Other Social Accounts</h3>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i
                                                    class='bx bxl-facebook-square facebook-color'></i> <a
                                                    href="#" target="_blank">facebook.com/username</a></p>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i
                                                    class='bx bxl-twitter twitter-color'></i> <a href="#"
                                                    target="_blank">twitter.com/username</a></p>
                                        </div>
                                        <div class="intro-item d-flex justify-content-between align-items-center">
                                            <p class="intro-title text-muted"><i
                                                    class='bx bxl-instagram instagram-color'></i> <a href="#"
                                                    target="_blank">instagram.com/username</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 p-0">
                                <div class="profile-info-right">

                                    <!-- Posts section -->
                                    <div class="row">
                                        <div class="col-md-9 profile-center">
                                            <ul
                                                class="list-inline profile-links d-flex justify-content-between w-shadow rounded">
                                                <li class="list-inline-item profile-active">
                                                    <a href="#">Timeline</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">About</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="friends.html">Friends</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Photos</a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-ql-dropdown">
                                                        <a href="#" class="dropdown-item">Activity Log</a>
                                                        <a href="#" class="dropdown-item">Videos</a>
                                                        <a href="#" class="dropdown-item">Check-Ins</a>
                                                        <a href="#" class="dropdown-item">Events</a>
                                                        <a href="#" class="dropdown-item">Likes</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled" style="margin-bottom: 0;">
                                                <li class="media post-form w-shadow">
                                                    <div class="media-body">

                                                    </div>
                                                </li>
                                            </ul>

                                            <h3 class="timeline-title text-center">Your Posts Job</h3>
                                            @if (count($posts) == 0)
                                                <h1>No Posts</h1>
                                                <img src="front/assets/images/users/album/album-2.jpg" class="w-100" alt="">

                                            
                                            @endif
                                            @foreach ($posts as $post)
                                                <div class="post border-bottom p-3 bg-white w-shadow my-3">
                                                    <div class="media text-muted pt-3">
                                                        <img src="{{ asset('images/user_images/' . Auth::user()->image) }}"
                                                            alt="Online user" class="mr-3 post-user-image">
                                                        <div class="media-body pb-3 mb-0 small lh-125">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center w-100">
                                                                <span
                                                                    class="post-type text-muted ">{{ $user->name }}
                                                                </span>

                                                            </div>
                                                            <span class="d-block">{{ $post->created_at }}<i
                                                                    class='bx bx-globe ml-3'></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h3>Title: {{ $post->post->title }}</h3>
                                                        <p>The Job Description: {{ $post->post->description }}</p>
                                                        <p>The Location: {{ $post->post->location }}</p>
                                                        <p>The Salary: {{ $post->post->salary }}</p>
                                                        @if ($post->status == 'accepted')
                                                            <p class="text-success fs-2">You are Accepted</p>
                                                            @elseif ($post->status == 'pending')
                                                            <form action="{{ route('employee.cancel', $post->id) }}"
                                                                method="post" onsubmit="return confirmCancel();">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" value="Cancel"
                                                                    class="btn btn-danger">
                                                            </form>
                                                            @else
                                                            <p class="text-danger fs-2">You are Rejected</p>
                                                        @endif
                                                      

                                                    </div>
                                                    <div class="d-block mt-3">
                                                        <img src="{{ asset('images/employer_images/' . $post->post->employer->image) }}"
                                                            class="w-100 mb-3" alt="post image">
                                                    </div>
                                                    <div class="mb-2">

                                                    </div>
                                                    <div class="border-top pt-3 hide-comments" style="display: none;">
                                                        <div class="row bootstrap snippets">
                                                            <div class="col-md-12">
                                                                <div class="comment-wrapper">
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-body">
                                                                            <ul class="media-list comments-list">
                                                                                <li class="media comment-form">
                                                                                    <a href="#"
                                                                                        class="pull-left">
                                                                                        <img src="front/assets/images/users/user-4.jpg"
                                                                                            alt=""
                                                                                            class="img-circle">
                                                                                    </a>
                                                                                    {{-- <div class="media-body">
                                                                                    <form action=""
                                                                                        method="" role="form">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control comment-input"
                                                                                                        placeholder="Write a comment...">

                                                                                                    <div
                                                                                                        class="input-group-btn">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn comment-form-btn"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="Tooltip on top"><i
                                                                                                                class='bx bxs-smiley-happy'></i></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn comment-form-btn comment-form-btn"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="Tooltip on top"><i
                                                                                                                class='bx bx-camera'></i></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn comment-form-btn comment-form-btn"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="Tooltip on top"><i
                                                                                                                class='bx bx-microphone'></i></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn comment-form-btn"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="Tooltip on top"><i
                                                                                                                class='bx bx-file-blank'></i></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div> --}}
                                                                                </li>
                                                                                <li class="media">
                                                                                    <a href="#"
                                                                                        class="pull-left">
                                                                                        <img src="front/assets/images/users/user-2.jpg"
                                                                                            alt=""
                                                                                            class="img-circle">
                                                                                    </a>
                                                                                    <div class="media-body">
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center w-100">
                                                                                            <strong
                                                                                                class="text-gray-dark"><a
                                                                                                    href="#"
                                                                                                    class="fs-8">Karen
                                                                                                    Minas</a></strong>
                                                                                            <a href="#"><i
                                                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                                                        </div>
                                                                                        <span
                                                                                            class="d-block comment-created-time">30
                                                                                            min ago</span>
                                                                                        <p class="fs-8 pt-2">
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            consectetur adipiscing elit.
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            <a href="#">#consecteturadipiscing
                                                                                            </a>.
                                                                                        </p>
                                                                                        <div class="commentLR">
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Like</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Reply</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="media">
                                                                                    <a href="#"
                                                                                        class="pull-left">
                                                                                        <img src="https://bootdey.com/img/Content/user_2.jpg"
                                                                                            alt=""
                                                                                            class="img-circle">
                                                                                    </a>
                                                                                    <div class="media-body">
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center w-100">
                                                                                            <strong
                                                                                                class="text-gray-dark"><a
                                                                                                    href="#"
                                                                                                    class="fs-8">Lia
                                                                                                    Earnest</a></strong>
                                                                                            <a href="#"><i
                                                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                                                        </div>
                                                                                        <span
                                                                                            class="d-block comment-created-time">2
                                                                                            hours ago</span>
                                                                                        <p class="fs-8 pt-2">
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            consectetur adipiscing elit.
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            <a href="#">#consecteturadipiscing
                                                                                            </a>.
                                                                                        </p>
                                                                                        <div class="commentLR">
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Like</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Reply</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="media">
                                                                                    <a href="#"
                                                                                        class="pull-left">
                                                                                        <img src="https://bootdey.com/img/Content/user_3.jpg"
                                                                                            alt=""
                                                                                            class="img-circle">
                                                                                    </a>
                                                                                    <div class="media-body">
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center w-100">
                                                                                            <strong
                                                                                                class="text-gray-dark"><a
                                                                                                    href="#"
                                                                                                    class="fs-8">Rusty
                                                                                                    Mickelsen</a></strong>
                                                                                            <a href="#"><i
                                                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                                                        </div>
                                                                                        <span
                                                                                            class="d-block comment-created-time">17
                                                                                            hours ago</span>
                                                                                        <p class="fs-8 pt-2">
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            consectetur adipiscing elit.
                                                                                            Lorem ipsum dolor sit amet,
                                                                                            <a href="#">#consecteturadipiscing
                                                                                            </a>.
                                                                                        </p>
                                                                                        <div class="commentLR">
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Like</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">Reply</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="media">
                                                                                    <div class="media-body">
                                                                                        <div
                                                                                            class="comment-see-more text-center">
                                                                                            <button type="button"
                                                                                                class="btn btn-link fs-8">See
                                                                                                More</button>
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
                                            @endforeach

                                        </div>
                                        <div class="col-md-3 profile-quick-media">
                                            <h6 class="text-muted timeline-title">Recent Media</h6>
                                            <div class="quick-media">
                                                <div class="media-overlay"></div>
                                                <a href="#" class="quick-media-img"><img
                                                        src="front/assets/images/users/album/album-1.jpg"
                                                        alt="Quick media"></a>
                                                <div class="media-overlay-content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="media-overlay-owner">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Media owner image">
                                                            <span class="overlay-owner-name fs-9">Irwin M.
                                                                Spelle</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="#" class="overlay-more"
                                                                data-toggle="dropdown" role="button"
                                                                aria-haspopup="true" aria-expanded="false"><i
                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right nav-drop dropdown-shadow">
                                                                <a class="dropdown-item" href="#">Save post</a>
                                                                <a class="dropdown-item" href="#">Turn on
                                                                    notifications</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="overlay-bottom d-flex justify-content-between align-items-center">
                                                        <div class="argon-reaction">
                                                            <span class="like-btn">
                                                                <a href="#" class="post-card-buttons"
                                                                    id="reactions"><i class='bx bxs-like mr-1'></i>
                                                                    67</a>
                                                                <ul class="reactions-box dropdown-shadow">
                                                                    <li class="reaction reaction-like"
                                                                        data-reaction="Like"></li>
                                                                    <li class="reaction reaction-love"
                                                                        data-reaction="Love"></li>
                                                                    <li class="reaction reaction-haha"
                                                                        data-reaction="HaHa"></li>
                                                                    <li class="reaction reaction-wow"
                                                                        data-reaction="Wow"></li>
                                                                    <li class="reaction reaction-sad"
                                                                        data-reaction="Sad"></li>
                                                                    <li class="reaction reaction-angry"
                                                                        data-reaction="Angry"></li>
                                                                </ul>
                                                            </span>
                                                        </div>
                                                        <div class="liked-users">
                                                            <img src="front/assets/images/users/user-9.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-6.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Liked users">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quick-media">
                                                <div class="media-overlay"></div>
                                                <a href="#" class="quick-media-img"><img
                                                        src="front/assets/images/users/album/album-2.jpg"
                                                        alt="Quick media"></a>
                                                <div class="media-overlay-content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="media-overlay-owner">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Media owner image">
                                                            <span class="overlay-owner-name fs-9">Irwin M.
                                                                Spelle</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="#" class="overlay-more"
                                                                data-toggle="dropdown" role="button"
                                                                aria-haspopup="true" aria-expanded="false"><i
                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right nav-drop dropdown-shadow">
                                                                <a class="dropdown-item" href="#">Save post</a>
                                                                <a class="dropdown-item" href="#">Turn on
                                                                    notifications</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="overlay-bottom d-flex justify-content-between align-items-center">
                                                        <div class="argon-reaction">
                                                            <span class="like-btn">
                                                                <a href="#" class="post-card-buttons"
                                                                    id="reactions"><i class='bx bxs-like mr-1'></i>
                                                                    67</a>
                                                                <ul class="reactions-box dropdown-shadow">
                                                                    <li class="reaction reaction-like"
                                                                        data-reaction="Like"></li>
                                                                    <li class="reaction reaction-love"
                                                                        data-reaction="Love"></li>
                                                                    <li class="reaction reaction-haha"
                                                                        data-reaction="HaHa"></li>
                                                                    <li class="reaction reaction-wow"
                                                                        data-reaction="Wow"></li>
                                                                    <li class="reaction reaction-sad"
                                                                        data-reaction="Sad"></li>
                                                                    <li class="reaction reaction-angry"
                                                                        data-reaction="Angry"></li>
                                                                </ul>
                                                            </span>
                                                        </div>
                                                        <div class="liked-users">
                                                            <img src="front/assets/images/users/user-9.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-6.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Liked users">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quick-media">
                                                <div class="media-overlay"></div>
                                                <a href="#" class="quick-media-img"><img
                                                        src="front/assets/images/users/album/album-3.jpg"
                                                        alt="Quick media"></a>
                                                <div class="media-overlay-content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="media-overlay-owner">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Media owner image">
                                                            <span class="overlay-owner-name fs-9">Irwin M.
                                                                Spelle</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="#" class="overlay-more"
                                                                data-toggle="dropdown" role="button"
                                                                aria-haspopup="true" aria-expanded="false"><i
                                                                    class='bx bx-dots-horizontal-rounded'></i></a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right nav-drop dropdown-shadow">
                                                                <a class="dropdown-item" href="#">Save post</a>
                                                                <a class="dropdown-item" href="#">Turn on
                                                                    notifications</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="overlay-bottom d-flex justify-content-between align-items-center">
                                                        <div class="argon-reaction">
                                                            <span class="like-btn">
                                                                <a href="#" class="post-card-buttons"
                                                                    id="reactions"><i class='bx bxs-like mr-1'></i>
                                                                    67</a>
                                                                <ul class="reactions-box dropdown-shadow">
                                                                    <li class="reaction reaction-like"
                                                                        data-reaction="Like"></li>
                                                                    <li class="reaction reaction-love"
                                                                        data-reaction="Love"></li>
                                                                    <li class="reaction reaction-haha"
                                                                        data-reaction="HaHa"></li>
                                                                    <li class="reaction reaction-wow"
                                                                        data-reaction="Wow"></li>
                                                                    <li class="reaction reaction-sad"
                                                                        data-reaction="Sad"></li>
                                                                    <li class="reaction reaction-angry"
                                                                        data-reaction="Angry"></li>
                                                                </ul>
                                                            </span>
                                                        </div>
                                                        <div class="liked-users">
                                                            <img src="front/assets/images/users/user-9.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-6.png"
                                                                alt="Liked users">
                                                            <img src="front/assets/images/users/user-12.png"
                                                                alt="Liked users">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New message modal -->
    <div class="modal fade" id="newMessageModal" tabindex="-1" role="dialog"
        aria-labelledby="newMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header new-msg-header">
                    <h5 class="modal-title" id="newMessageModalLabel">Start new conversation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body new-msg-body">
                    <form action="" method="" class="new-msg-form">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control search-input" rows="5" id="message-text" placeholder="Type a message..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer new-msg-footer">
                    <button type="button" class="btn btn-primary btn-sm">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="front/assets/js/jquery/jquery-3.3.1.min.js"></script>
    <script src="front/assets/js/popper/popper.min.js"></script>
    <script src="front/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Optional -->
    <script src="front/assets/js/app.js"></script>
    <script src="front/assets/js/components/components.js"></script>
    <script>
        function confirmCancel() {
            return confirm('Are you sure you want to cancel this application?');
        }
    </script>
</body>

</html>
