<nav class="container-fluid nav navbar navbar-light bg-light shadow-sm sticky-top">
    <ul class="nav navbar container-fluid">
        <ul class="d-content nav">
            <li class="nav-item" style="margin-left: 10px">
                <a class="btn btn-outline-dark nav-link" href="{{ route('employee.profile') }}">Profile</a>
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
                    <a class="btn btn-outline-dark nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item me-3">
                    <a class="btn btn-outline-dark nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown" style="margin-right:0px">
                <a class="btn btn-outline-danger dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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
</nav>
