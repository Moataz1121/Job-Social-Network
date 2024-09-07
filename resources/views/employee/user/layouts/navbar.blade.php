<nav id="navbar-main" class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto" id="main_menu">
            <li class="nav-item">
                <a type="button" class="btn btn-outline-primary nav-link p-2" href="{{ route('employee.profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn btn-outline-primary nav-link p-2" href="{{ route('employee.job') }}">Posts Jobs</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn btn-outline-primary nav-link p-2" href="{{ route('employee.editProfile') }}">Edit Profile</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="btn btn-outline-success nav-link p-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-outline-info nav-link p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-danger dropdown-toggle nav-link p-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
