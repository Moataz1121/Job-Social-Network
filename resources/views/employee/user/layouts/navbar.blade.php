<nav id="navbar-main" class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="w-100 justify-content-md-center">
        <ul class="navbar-nav mr-5 flex-row" id="main_menu">
            <li class="nav-item">
                <a type="button" class="btn  nav-link p-0" href="{{ route('employee.profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn nav-link p-0" href="{{ route('employee.job') }}">Posts Jobs</a>
            </li>
            <button type="button" class="btn nav-link" id="menu-toggle"><img
                    src="front/assets/images/icons/theme/navs.png" alt="Navbar navs"></button>

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
        {{-- For Logout --}}
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->

        </ul>
        {{-- End For Logout --}}

    </div>

</nav>
