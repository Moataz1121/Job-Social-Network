<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="{{ asset('front/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg bg-light shadow border-1">
            <div class="container d-flex justify-content-between">
                <div>
                    <a class="navbar-brand fw-bold text-dark" href="#">JOB HIRING</a>
                </div>

                <div class="nav navbar-nav">
                    <a class="nav-link text-dark" href="{{ route('admin.login') }}">Admin</a>
                    <a class="nav-link text-dark" href="{{ route('employer.login') }}">Employer</a>
                    <a class="nav-link text-dark" href="{{ route('login') }}">Employee</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="hero-section">
            <img src="{{ asset('images/wallhaven-d6jzy3_1920x500.png') }}" alt="hero-image" class="position-relative"
                width="100%">
            <div style="position: absolute; top: 18%; left:25%">
                <h3 class="text-light text-center" style="font-family: 'Roboto'">
                    Job Hiring Platform
                </h3>
                <h5 class="text-light text-center" style="font-weight: 300; font-family:'Roboto'">
                    ITI - Intensive Training Program, Laravel Project
                </h5>
            </div>
        </div>
        <div class="info-section p-5">
            <div class="row">
                <h3 class="col-3" style="font-weight: 500">About Us</h3>
                <div class="col-9">
                    <div class="">
                        <h4>Summary: </h4>
                        <p class="" style="font-weight: 300; font-size: 20px">
                            As a team, we combine strong technical skills with excellent soft skills. Proficient in
                            Laravel, PHP, Docker, HTML5, CSS3, and Bootstrap 5, we build and deploy web applications
                            effectively. We excel in collaboration and communication, working well together and tackling
                            challenges with a problem-solving mindset. Our goal is to leverage our technical expertise
                            and teamwork to deliver innovative solutions and drive project success while continuously
                            improving our skills and processes.
                        </p>
                        <h4 class="mb-3">Team Members: </h4>
                        <ul class="d-flex justify-content-between"
                            style="font-weight: 300; font-size:18px; list-style-type:none">
                            <li>Mostafa Jaafar,</li>
                            <li>Abdelrahman Abdelhady,</li>
                            <li>Moataz Ibrahiem,</li>
                            <li>Ahmed Hamdy,</li>
                            <li>Ahmed Fawzy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="skills-section p-5" style="background-color: rgba(0, 0, 0, 0.877)">
            <h3 class="text-center text-light mb-5">Skills</h3>
            <p class="text-center text-light">
                We're skilled in Laravel, PHP, Docker, HTML5, CSS3, Bootstrap 5, Angular, Apache, and Ajax, which helps
                us build and launch web applications smoothly. Our teamwork and problem-solving abilities ensure we
                handle challenges effectively and deliver great results. Additionally, our continuous learning mindset
                drives us to stay updated with the latest technologies and best practices.
            </p>
            <div class="row d-flex justify-content-between py-5" style="padding: 3rem">
                <div class="col-3" style="margin-top: 6.5rem">
                    <p class="text-light mb-4 text-light border-bottom py-3">OUR FOCUS</p>
                    <p class="text-start my-4 text-light">UI/UX Design</p>
                    <p class="text-start mb-4 text-light">Responsive Design</p>
                    <p class="text-start mb-4 text-light">Web Design</p>
                    <p class="text-start mb-4 text-light">Mobile App Design</p>
                </div>
                <div class="col-6">
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">HTML5</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">CSS3</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">Bootstrap</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">JS</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">PHP</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100 w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0" style="width: 5.9rem"
                            id="basic-addon1">Laravel</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-75"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0" style="width: 5.9rem"
                            id="basic-addon1">Angular</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-25"
                            role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="progress mb-3 bg-dark w-100" style="height: 3rem">
                        <span class="input-group-text rounded-0 w-25" id="basic-addon1">Docker</span>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="footer-section container">
            <div class="row d-flex justify-content-between align-items-center p-4"
                style="background-color: rgba(0, 0, 0, 0.950)">
                <div class="col-4 text-center">
                    <h6 class="text-light">Contact Us</h6>

                    <span class="text-light d-block mb-1" style="font-weight: 300"><i
                            class="fa-regular text-light mx-2 fa-envelope"></i>email@gmail.com</span>
                    <span class="text-light" style="font-weight: 300"><i
                            class="fa-solid text-light mx-2 fa-phone"></i>+20
                        109 732
                        9869</span>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <input type="button" value="CONTACT US" class="btn btn-outline-light">
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-center mb-3">
                        <a href="#" class="mx-3"><i class="fa-brands text-light fa-linkedin"></i></a>
                        <a href="#" class="mx-3"><i class="fa-brands text-light fa-github"></i></a>
                        <a href="#" class="mx-3"><i class="fa-brands text-light fa-facebook-f"></i></a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <span class="text-light" style="font-weight: 300; font-size: .9rem">Copyright© 2024 ITI</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('front/assets/js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
