<!DOCTYPE html>
<html lang="en">

@include('employee.auth.header')
<body>
    <div class="row ht-100v flex-row-reverse no-gutters">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="signup-form">
                <div class="auth-logo text-center mb-5">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="front/assets/images/logo-64x64.png" class="logo-img" alt="Logo">
                        </div>
                        <div class="col-md-10">
                            <p>Job Social Network</p>
                            <span class="fs-1">Job Hiring</span>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <div class="col-md-6 auth-bg-image d-flex justify-content-center align-items-center">
            <div class="auth-left-content mt-5 mb-5 text-center">
                <div class="weather-small text-white">
                    <p class="current-weather"><i class='bx bx-sun'></i> <span>42&deg;</span></p>
                    <p class="weather-city">Egypt</p>
                </div>
                <div class="text-white mt-5 mb-5">
                    <h2 class="create-account mb-3">Create Account</h2>
                    <p>Enter your personal details and start journey with us.</p>
                </div>
                {{-- <div class="auth-quick-links">
                    <a href="#" class="btn btn-outline-primary">Purchase template</a>
                </div> --}}
            </div>
        </div>
    </div>

 @include('employee.auth.script')
</body></html>
