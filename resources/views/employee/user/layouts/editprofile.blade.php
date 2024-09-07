<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="front/assets/images/logo-16x16.png" />
    <title>Edit Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="front/assets/css/boxicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('front')}}/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{asset('front')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/components.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/media.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/chat.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js" type="text/javascript"></script>
    <script src="front/assets/js/load.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

</head>
<body class="newsfeed">
    <div class="container-fluid" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 newsfeed-right-side">
                @include('employee.user.layouts.navbar')
                        <h1 class="text-center mt-3">Edit Profile</h1>
                        <div class="container mt-5 ">
                            <form action="{{ route('employee.updateprofile', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="from_date">Birth Date</label>
                                    <input type="text" class="form-control" id="from_date" name="birth_date"
                                        placeholder="Enter Your Birth Date" value="{{ $user->birth_date }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Edit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>

    @include('employee.user.layouts.script')
</body>

</html>
