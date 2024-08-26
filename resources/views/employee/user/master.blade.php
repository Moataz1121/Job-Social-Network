<!DOCTYPE html>
<html lang="en" class="no-js">

@include('employee.user.layouts.head')
<body class="newsfeed">
    <div class="container-fluid" id="wrapper">
        <div class="row newsfeed-size">
            <div  class="col-md-12 newsfeed-right-side">
                @include('employee.user.layouts.navbar')
                <div class="row newsfeed-right-side-content mt-3">
                    @include('employee.user.layouts.sidebar')
                   @yield('content')
                    <div class="col-md-3 third-section">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="weather-card-header d-flex justify-content-between align-items-center">
                                    <p class="fs-1 mb-0">11:37 PM</p>
                                    <a href="#" class="btn text-primary">Egypt, Cairo </a>
                                </div>
                                <div class="weather-quick align-items-center mt-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img src="front/assets/images/icons/weather/sun.png" width="40" height="40" alt="Weather icon">
                                            <h1 class="weather-card display-4 ml-3">28<span class="text-muted">&deg;</span></h1>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 fs-1" ><i class='bx bx-droplet'></i> 15%</p>
                                            <p class="mb-0 fs-1" ><i class='bx bx-flag'></i> 10km/h</p>
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

    <!-- Modals -->
    {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="postModal" aria-labelledby="postModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body post-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7 post-content">
                                <img src="https://scontent.fevn1-2.fna.fbcdn.net/v/t1.0-9/56161887_588993861570433_2896723195090436096_n.jpg?_nc_cat=103&_nc_eui2=AeFI0UuTq3uUF_TLEbnZwM-qSRtgOu0HE2JPwW6b4hIki73-2OWYhc7L1MPsYl9cYy-w122CCak-Fxj0TE1a-kjsd-KXzh5QsuvxbW_mg9qqtg&_nc_ht=scontent.fevn1-2.fna&oh=ea44bffa38f368f98f0553c5cef8e455&oe=5D050B05" alt="post-image">
                            </div>
                            <div class="col-md-5 pr-3">
                                <div class="media text-muted pr-3 pt-3">
                                    <img src="front/assets/images/users/user-1.jpg" alt="user image" class="mr-3 post-modal-user-img">
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between align-items-center w-100 post-modal-top-user fs-9">
                                            <a href="#" class="text-gray-dark">John jjjjjMichael</a>
                                            <div class="dropdown">
                                                <a href="#" class="postMoreSettings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left postDropdownMenu">
                                                    <a href="#" class="dropdown-item" aria-describedby="savePost">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <i class='bx bx-bookmark-plus postOptionIcon'></i>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <span class="postOptionTitle">Save post</span>
                                                                <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block fs-8">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                                    </div>
                                </div>
                                <div class="mt-3 post-modal-caption fs-9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Chat Popup -->
<!--
    <div class="chat-popup shadow" id="hide-in-mobile">
        <div class="row chat-window col-xs-5 col-md-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="top-bar shadow-sm d-flex align-items-center">
                        <div class="col-md-6 col-xs-6">
                            <a href="profile.html">
                                <img src="front/assets/images/users/user-2.jpg" class="mr-2 chatbox-user-img" alt="Chat user image">
                                <span class="panel-title">Karen Minas</span>
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 d-flex align-items-center justify-content-between">
                            <a href="#">
                                <img src="front/assets/images/icons/messenger/video-call.png" class="chatbox-call" alt="Chatbox contact types">
                            </a>
                            <a href="#" data-toggle="modal" data-target="#callModal">
                                <img src="front/assets/images/icons/messenger/call.png" class="chatbox-call" alt="Chatbox contact types">
                            </a>
                            <a href="javascript:void(0)"><i id="minimize-chat-window" class="bx bx-minus icon_minim"></i></a>
                            <a href="javascript:void(0)" id="close-chatbox"><i class="bx bx-x"></i></a>
                        </div>
                    </div>
                    <div id="messagebody" class="msg_container_base">
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>Are you going to the party on Saturday?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>I was thinking about it. Are you?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>Really? Well, what time does it start?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_sent">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>It starts at 8:00 pm, and I really think you should go.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-xs-10 col-md-10">
                                <div class="messages message-receive shadow-sm">
                                    <p>Well, who else is going to be there?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages message-reply bg-primary shadow-sm">
                                    <p>Everybody from school.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer chat-inputs">
                        <div class="col-md-12 message-box">
                            <input type="text" class="w-100 search-input type-message" placeholder="Type a message..." />
                            <div class="chat-tools">
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/theme/post-image.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/messenger/gif.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/messenger/smile.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/messenger/console.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/messenger/attach-file.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                                <a href="#" class="chatbox-tools">
                                    <img src="front/assets/images/icons/messenger/photo-camera.png" class="chatbox-tools-img" alt="Chatbox tool">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- END Chat Popup -->
    
    <!-- Call modal -->
    {{-- <div id="callModal" class="modal fade call-modal" tabindex="-1" role="dialog" aria-labelledby="callModalLabel" aria-hidden="true">
        <div class="modal-dialog call-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <div class="call-status">
                        <h1 id="callModalLabel" class="modal-title mr-3">Connected</h1>
                        <span class="online-status bg-success"></span>
                    </div>
                    <div class="modal-options d-flex align-items-center">
                        <button type="button" class="btn btn-quick-link" id="minimize-call-window">
                            <i class='bx bx-minus'></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row h-100">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="call-user text-center">
                                <div class="call-user-img-anim">
                                    <img src="front/assets/images/users/user-1.jpg" class="call-user-img" alt="Call user image">
                                </div>
                                <p class="call-user-name">Name Surename</p>
                                <p class="text-muted call-time">05:28</p>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4 d-flex align-items-center justify-content-between call-btn-list">
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Disable microphone"><i class='bx bxs-microphone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Enable camera"><i class='bx bxs-video-off'></i></a>
                            <a href="#" class="btn call-btn drop-call" data-toggle="tooltip" data-placement="top" data-title="End call" data-dismiss="modal" aria-label="Close"><i class='bx bxs-phone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Share Screen"><i class='bx bx-laptop'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Dark mode"><i class='bx bx-moon'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END call modal -->
@include('employee.user.layouts.script')
</body>

</html>
