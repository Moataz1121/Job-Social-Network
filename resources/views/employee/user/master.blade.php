<!DOCTYPE html>
<html lang="en" class="no-js">

@include('employee.user.layouts.head')

<body class="newsfeed">
    <div class="container-fluid" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 newsfeed-right-side">
                @include('employee.user.layouts.navbar')
                <div class="row newsfeed-right-side-content mt-3">
                    @include('employee.user.layouts.sidebar')
                    <div class="col">
                        @yield('content')
                    </div>
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
                                            <img src="front/assets/images/icons/weather/sun.png" width="40"
                                                height="40" alt="Weather icon">
                                            <h1 class="weather-card display-4 ml-3">28<span
                                                    class="text-muted">&deg;</span></h1>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 fs-1"><i class='bx bx-droplet'></i> 15%</p>
                                            <p class="mb-0 fs-1"><i class='bx bx-flag'></i> 10km/h</p>
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

    @include('employee.user.layouts.script')
</body>

</html>
