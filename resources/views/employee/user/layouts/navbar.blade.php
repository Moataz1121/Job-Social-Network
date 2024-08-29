<nav id="navbar-main" class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="w-100 justify-content-md-center">
        {{-- <ul class="nav navbar-nav enable-mobile px-2">
            <li class="nav-item">
                <button type="button" class="btn nav-link p-0"><img src="front/assets/images/icons/theme/post-image.png"
                        class="f-nav-icon" alt="Quick make post"></button>
            </li>
            <li class="nav-item w-100 py-2">
                <form class="d-inline form-inline w-100 px-4">
                    <div class="input-group">
                        <input type="text" class="form-control search-input"
                            placeholder="Search for people, companies, events and more..." aria-label="Search"
                            aria-describedby="search-addon">
                        <div class="input-group-append">
                            <button class="btn search-button" type="button"><i class='bx bx-search'></i></button>
                        </div>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a href="messages.html" class="nav-link nav-icon nav-links message-drop drop-w-tooltip"
                    data-placement="bottom" data-title="Messages">
                    <img src="front/assets/images/icons/navbar/message.png" class="message-dropdown f-nav-icon"
                        alt="navbar icon">
                </a>
            </li>
        </ul> --}}
        {{-- <ul class="navbar-nav mr-5 flex-row" id="main_menu">
            <a class="navbar-brand nav-item mr-lg-5" href="{{route('employee.index')}}"><img
                    src="front/assets/images/logo-64x64.png" width="40" height="40" class="mr-3" alt="Logo"></a>
            <form class="w-30 mx-2 my-auto d-inline form-inline mr-5 dropdown search-form">
                <div class="input-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="searchDropdown">
                    <input type="text" class="form-control search-input w-75"
                        placeholder="Search for people, companies, events and more..." aria-label="Search"
                        aria-describedby="search-addon">
                    <div class="input-group-append">
                        <button class="btn search-button" type="button"><i class='bx bx-search'></i></button>
                    </div>
                </div>
                <ul class="dropdown-menu notify-drop nav-drop shadow-sm" aria-labelledby="searchDropdown">
                    <div class="notify-drop-title">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 fs-8">Search Results <span
                                    class="badge badge-pill badge-primary ml-2">29</span></div>
                        </div>
                    </div>
                    <!-- end notify title -->
                    <!-- notify content -->
                    <div class="drop-content">
                        <h6 class="dropdown-header">Peoples</h6>
                        <li class="dropdown-item">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-6.png" alt="Search result">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Susan P. Jarvis</a>
                                <a href="#" class="btn btn-quick-link join-group-btn border text-right float-right">
                                    Add Friend
                                </a>
                                <p class="time">6 Mutual friends</p>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-5.png" alt="Search result">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Ruth D. Greene</a>
                                <a href="#" class="btn btn-quick-link join-group-btn border text-right float-right">
                                    Add Friend
                                </a>
                            </div>
                        </li>
                        <h6 class="dropdown-header">Groups</h6>
                        <li class="dropdown-item">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/groups/group-2.jpg" alt="Search result">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Tourism</a>
                                <a href="#" class="btn btn-quick-link join-group-btn border text-right float-right">
                                    Join
                                </a>
                                <p class="time">2.5k Members 35+ post a week</p>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/groups/group-1.png" alt="Search result">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Argon Social Network <img
                                        src="front/assets/images/theme/verify.png" width="10px" class="verify"
                                        alt="Group verified"></a>
                                <a href="#" class="btn btn-quick-link join-group-btn border text-right float-right">
                                    Join
                                </a>
                                <p class="time">10k Members 20+ post a week</p>
                            </div>
                        </li>
                    </div>
                    <div class="notify-drop-footer text-center">
                        <a href="#">See More</a>
                    </div>
                </ul>
            </form>
            <li class="nav-item s-nav dropdown d-mobile">
                <a href="#" class="nav-link nav-icon nav-links drop-w-tooltip" data-toggle="dropdown"
                    data-placement="bottom" data-title="Create" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="front/assets/images/icons/navbar/create.png" alt="navbar icon">
                </a>
                <div class="dropdown-menu dropdown-menu-right nav-dropdown-menu">
                    <a href="#" class="dropdown-item" aria-describedby="createGroup">
                        <div class="row">
                            <div class="col-md-2">
                                <i class='bx bx-group post-option-icon'></i>
                            </div>
                            <div class="col-md-10">
                                <span class="fs-9">Group</span>
                                <small id="createGroup" class="form-text text-muted">Find people with shared
                                    interests</small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item" aria-describedby="createEvent">
                        <div class="row">
                            <div class="col-md-2">
                                <i class='bx bx-calendar post-option-icon'></i>
                            </div>
                            <div class="col-md-10">
                                <span class="fs-9">Event</span>
                                <small id="createEvent" class="form-text text-muted">bring people together with a public
                                    or private event</small>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item s-nav dropdown message-drop-li">
                <a href="#" class="nav-link nav-links message-drop drop-w-tooltip" data-toggle="dropdown"
                    data-placement="bottom" data-title="Messages" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="front/assets/images/icons/navbar/message.png" class="message-dropdown" alt="navbar icon">
                    <span class="badge badge-pill badge-primary">1</span>
                </a>
                <ul class="dropdown-menu notify-drop dropdown-menu-right nav-drop shadow-sm">
                    <div class="notify-drop-title">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 fs-8">Messages | <a href="#">Requests</a></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <a href="#" class="notify-right-icon">
                                    Mark All as Read
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end notify title -->
                    <!-- notify content -->
                    <div class="drop-content">
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-6.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Susan P. Jarvis</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <i class='bx bx-check'></i> This party is going to have a DJ, food, and drinks.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-5.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Ruth D. Greene</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    Great, I’ll see you tomorrow!.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-7.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Kimberly R. Hatfield</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    yeah, I will be there.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-8.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Joe S. Feeney</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    I would really like to bring my friend Jake, if...
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-9.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">William S. Willmon</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    Sure, what can I help you with?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-10.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Sean S. Smith</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    Which of those two is best?
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class="notify-drop-footer text-center">
                        <a href="#">See More</a>
                    </div>
                </ul>
            </li>
            <li class="nav-item s-nav dropdown notification">
                <a href="#" class="nav-link nav-links rm-drop-mobile drop-w-tooltip" data-toggle="dropdown"
                    data-placement="bottom" data-title="Notifications" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="front/assets/images/icons/navbar/notification.png" class="notification-bell"
                        alt="navbar icon"> <span class="badge badge-pill badge-primary">3</span>
                </a>
                <ul class="dropdown-menu notify-drop dropdown-menu-right nav-drop shadow-sm">
                    <div class="notify-drop-title">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 fs-8">Notifications <span
                                    class="badge badge-pill badge-primary ml-2">3</span></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <a href="#" class="notify-right-icon">
                                    Mark All as Read
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end notify title -->
                    <!-- notify content -->
                    <div class="drop-content">
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-10.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Sean</a> <span class="notification-type">replied
                                    to your comment on a post in </span><a href="#" class="notification-for">PHP</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i class='bx bxs-group'></i></span> 3h
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-7.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Kimberly</a> <span class="notification-type">likes
                                    your comment "I would really... </span>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i class='bx bxs-like'></i></span> 7h
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-8.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <span class="notification-type">10 people saw your story before it disappeared. See who
                                    saw it.</span>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i class='bx bx-images'></i></span> 23h
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-11.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Michelle</a> <span
                                    class="notification-type">posted in </span><a href="#"
                                    class="notification-for">Argon Social Design System</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i
                                            class='bx bxs-quote-right'></i></span> 1d
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-5.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Karen</a> <span class="notification-type">likes
                                    your comment "Sure, here... </span>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i class='bx bxs-like'></i></span> 2d
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <div class="notify-img">
                                    <img src="front/assets/images/users/user-12.png" alt="notification user image">
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <a href="#" class="notification-user">Irwin</a> <span class="notification-type">posted
                                    in </span><a href="#" class="notification-for">Themeforest</a>
                                <a href="#" class="notify-right-icon">
                                    <i class='bx bx-radio-circle-marked'></i>
                                </a>
                                <p class="time">
                                    <span class="badge badge-pill badge-primary"><i
                                            class='bx bxs-quote-right'></i></span> 3d
                                </p>
                            </div>
                        </li>
                    </div>
                    <div class="notify-drop-footer text-center">
                        <a href="#">See More</a>
                    </div>
                </ul>
            </li>
            <li class="nav-item s-nav dropdown d-mobile">
                <a href="#" class="nav-link nav-links nav-icon drop-w-tooltip" data-toggle="dropdown"
                    data-placement="bottom" data-title="Pages" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="front/assets/images/icons/navbar/flag.png" alt="navbar icon">
                </a>
                <div class="dropdown-menu dropdown-menu-right nav-drop">
                    <a class="dropdown-item" href="newsfeed-2.html">Newsfeed 2</a>
                    <a class="dropdown-item" href="sign-in.html">Sign in</a>
                    <a class="dropdown-item" href="sign-up.html">Sign up</a>
                </div>
            </li>
            <li class="nav-item s-nav d-mobile">
                <a href="marketplace.html" class="nav-link nav-links nav-icon drop-w-tooltip" data-placement="bottom"
                    data-title="Marketplace">
                    <img src="front/assets/images/icons/navbar/market.png" alt="navbar icon">
                </a>
            </li>
            <li class="nav-item s-nav">
                <a href="profile.html" class="nav-link nav-links">
                    <div class="menu-user-image">
                        <img src="front/assets/images/users/user-4.jpg" class="menu-user-img ml-1" alt="Menu Image">
                    </div>
                </a>
            </li>
            <li class="nav-item s-nav nav-icon dropdown">
                <a href="settings.html" data-toggle="dropdown" data-placement="bottom" data-title="Settings"
                    class="nav-link settings-link rm-drop-mobile drop-w-tooltip" id="settings-dropdown"><img
                        src="front/assets/images/icons/navbar/settings.png" class="nav-settings" alt="navbar icon"></a>
                <div class="dropdown-menu dropdown-menu-right settings-dropdown shadow-sm"
                    aria-labelledby="settings-dropdown">
                    <a class="dropdown-item" href="#">
                        <img src="front/assets/images/icons/navbar/help.png" alt="Navbar icon"> Help Center</a>
                    <a class="dropdown-item d-flex align-items-center dark-mode" onClick="event.stopPropagation();"
                        href="#">
                        <img src="front/assets/images/icons/navbar/moon.png" alt="Navbar icon"> Dark Mode
                        <button type="button" class="btn btn-lg btn-toggle ml-auto" data-toggle="button"
                            aria-pressed="false" autocomplete="off">
                            <div class="handle"></div>
                        </button>
                    </a>
                    <a class="dropdown-item" href="#">
                        <img src="front/assets/images/icons/navbar/gear-1.png" alt="Navbar icon"> Settings</a>
                    <a class="dropdown-item logout-btn" href="#">
                        <img src="front/assets/images/icons/navbar/logout.png" alt="Navbar icon"> Log Out</a>
                </div>
            </li>
            <button type="button" class="btn nav-link" id="menu-toggle"><img
                    src="front/assets/images/icons/theme/navs.png" alt="Navbar navs"></button>
        </ul> --}}
        {{-- For Logout --}}
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    {{-- <a href="">ssss</a> --}}
                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a> --}}
                        {{-- <h1>sssss</h1> --}}
                    <div aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        {{-- End For Logout --}}

    </div>

</nav>
