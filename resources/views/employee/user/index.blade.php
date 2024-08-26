@extends('employee.user.master')


@section('content')

<div class="col-md-6 second-section" id="page-content-wrapper">
                       
    <ul class="list-unstyled" style="margin-bottom: 0;">
        <li class="media post-form w-shadow">
            <div class="media-body">
                <div class="form-group post-input">
                    <textarea class="form-control" id="postForm" rows="2" placeholder="What's on your mind, Arthur?"></textarea>
                </div>
                <div class="row post-form-group">
                    <div class="col-md-9">
                        <button type="button" class="btn btn-link post-form-btn btn-sm">
                            <img src="front/assets/images/icons/theme/post-image.png" alt="post form icon"> <span>Photo/Video</span>
                        </button>
                        <button type="button" class="btn btn-link post-form-btn btn-sm">
                            <img src="front/assets/images/icons/theme/tag-friend.png" alt="post form icon"> <span>Tag Friends</span>
                        </button>
                        <button type="button" class="btn btn-link post-form-btn btn-sm">
                            <img src="front/assets/images/icons/theme/check-in.png" alt="post form icon"> <span>Check In</span>
                        </button>
                    </div>
                    <div class="col-md-3 text-right">
                        <button type="button" class="btn btn-primary btn-sm">Publish</button>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <!-- Posts -->
    <div class="posts-section mb-5">
        <div class="post border-bottom p-3 bg-white w-shadow">
            <div class="media text-muted pt-3">
                <img src="front/assets/images/users/user-1.jpg" alt="Online user" class="mr-3 post-user-image">
                <div class="media-body pb-3 mb-0 small lh-125">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a href="#" class="text-gray-dark post-user-name">John Michael</a>
                        <div class="dropdown">
                            <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
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
                                            <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
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
                                            <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class='bx bx-time post-option-icon'></i>
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-9">Snooze Lina for 30 days</span>
                                            <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
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
                                            <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                </div>
            </div>
            <div class="mt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
            </div>
            <div class="d-block mt-3">
                <img src="https://scontent.fevn1-2.fna.fbcdn.net/v/t1.0-9/56161887_588993861570433_2896723195090436096_n.jpg?_nc_cat=103&_nc_eui2=AeFI0UuTq3uUF_TLEbnZwM-qSRtgOu0HE2JPwW6b4hIki73-2OWYhc7L1MPsYl9cYy-w122CCak-Fxj0TE1a-kjsd-KXzh5QsuvxbW_mg9qqtg&_nc_ht=scontent.fevn1-2.fna&oh=ea44bffa38f368f98f0553c5cef8e455&oe=5D050B05" class="post-content" alt="post image">
            </div>
            <div class="mb-3">
                <!-- Reactions -->
                <div class="argon-reaction">
                    <span class="like-btn">
                        <a href="#" class="post-card-buttons" id="reactions"><i class='bx bxs-like mr-2'></i> 67</a>
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
                <a href="javascript:void(0)" class="post-card-buttons" id="show-comments"><i class='bx bx-message-rounded mr-2'></i> 5</a>
                <div class="dropdown dropup share-dropup">
                    <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-share-alt mr-2'></i> Share
                    </a>
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
                                                <img src="front/assets/images/users/user-4.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <form action="" method="" role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control comment-input" placeholder="Write a comment...">

                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bxs-smiley-happy'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-camera'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-microphone'></i></button>
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-file-blank'></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="front/assets/images/users/user-2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Karen Minas</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">30 min ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Lia Earnest</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">2 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Rusty Mickelsen</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">17 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
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
        <div class="post border-bottom p-3 bg-white w-shadow">
            <div class="media text-muted pt-3">
                <img src="front/assets/images/users/user-2.jpg" alt="Online user" class="mr-3 post-user-image">
                <div class="media-body pb-3 mb-0 small lh-125">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a href="#" class="text-gray-dark post-user-name">Karen Minas</a>
                        <div class="dropdown">
                            <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
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
                                            <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
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
                                            <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class='bx bx-time post-option-icon'></i>
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-9">Snooze Karen for 30 days</span>
                                            <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
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
                                            <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                </div>
            </div>
            <div class="mt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
            </div>
            <div class="d-block mt-3">
                <video id="my_video_1" class="video-js vjs-default-skin post-content" width="640px" height="400px" controls preload="none" poster='https://scontent.fevn1-2.fna.fbcdn.net/v/t1.0-9/53323455_587990788367325_4529827897430507520_n.jpg?_nc_cat=100&_nc_eui2=AeF-F6s-7bevnyjZs6JbGj3WPqHUIRKQ4uJ2vH8L-OD-3KZPZFJ7GVOVSYewqLB1928c3NeJ-OWQgN9et1oxB4kpONH0rFMSpp1H-lfjwH2tzA&_nc_ht=scontent.fevn1-2.fna&oh=ab0d869caefae1260b3ff755e2e031ba&oe=5D07FF32' data-setup='{ "aspectRatio":"640:400", "playbackRates": [1, 1.5, 2] }'>
                    <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                    <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                </video>
            </div>
            <div class="mb-3">
                <!-- Reactions -->
                <div class="argon-reaction">
                    <span class="like-btn">
                        <a href="#" class="post-card-buttons" id="reactions"><i class='bx bxs-like mr-2'></i> 67</a>
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
                <a href="javascript:void(0)" class="post-card-buttons" id="show-comments"><i class='bx bx-message-rounded mr-2'></i> 5</a>
                <div class="dropdown dropup share-dropup">
                    <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-share-alt mr-2'></i> Share
                    </a>
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
                                                <img src="front/assets/images/users/user-4.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <form action="" method="" role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control comment-input" placeholder="Write a comment...">

                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bxs-smiley-happy'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-camera'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-microphone'></i></button>
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-file-blank'></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="front/assets/images/users/user-2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Karen Minas</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">30 min ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Lia Earnest</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">2 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Rusty Mickelsen</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">17 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
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
        <div class="post border-bottom p-3 bg-white w-shadow">
            <div class="media text-muted pt-3">
                <img src="front/assets/images/users/user-4.jpg" alt="Online user" class="mr-3 post-user-image">
                <div class="media-body pb-3 mb-0 small lh-125">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a href="#" class="text-gray-dark post-user-name">Arthur Minasyan</a>
                        <div class="dropdown">
                            <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
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
                                            <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
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
                                            <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
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
                                            <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
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
                                            <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                </div>
            </div>
            <div class="mt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
            </div>
            <div class="d-block mt-3">
                <img src="https://scontent.fevn1-2.fna.fbcdn.net/v/t1.0-9/54799225_2011170049005317_4866978526609276928_o.jpg?_nc_cat=107&_nc_eui2=AeEHQnVZPRAGrFMwQkvn9nKuaYZc2vCQIEISZzVqaGn3SkHJcmP_KHM2GGNG1UMbyL-HjX03GFyI0Rf3Ft1k0zlGmfGCEeuckyqHUN-a0JRe7A&_nc_ht=scontent.fevn1-2.fna&oh=d3a637e08353d870a8125f69c0b2b9ff&oe=5D4E5770" class="post-content" alt="post image">
            </div>
            <div class="mb-3">
                <!-- Reactions -->
                <div class="argon-reaction">
                    <span class="like-btn">
                        <a href="#" class="post-card-buttons" id="reactions"><i class='bx bxs-like mr-2'></i> 67</a>
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
                <a href="javascript:void(0)" class="post-card-buttons" id="show-comments"><i class='bx bx-message-rounded mr-2'></i> 5</a>
                <div class="dropdown dropup share-dropup">
                    <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-share-alt mr-2'></i> Share
                    </a>
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
                                                <img src="front/assets/images/users/user-4.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <form action="" method="" role="form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control comment-input" placeholder="Write a comment...">

                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bxs-smiley-happy'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-camera'></i></button>
                                                                    <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-microphone'></i></button>
                                                                    <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class='bx bx-file-blank'></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="front/assets/images/users/user-2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Karen Minas</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">30 min ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Lia Earnest</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">2 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><a href="#" class="fs-8">Rusty Mickelsen</a></strong>
                                                    <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
                                                </div>
                                                <span class="d-block comment-created-time">17 hours ago</span>
                                                <p class="fs-8 pt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                                </p>
                                                <div class="commentLR">
                                                    <button type="button" class="btn btn-link fs-8">Like</button>
                                                    <button type="button" class="btn btn-link fs-8">Reply</button>
                                                </div>
                                            </div>
                                        </li>
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
        {{-- <div class="d-flex justify-content-center my-5 load-post">
            <button type="button" class="btn btn-quick-link join-group-btn border shadow" data-toggle="tooltip" data-placement="top" data-title="Load More Post"><i class='bx bx-dots-horizontal-rounded'></i></button>
        </div> --}}
    </div>
</div>
@endsection
