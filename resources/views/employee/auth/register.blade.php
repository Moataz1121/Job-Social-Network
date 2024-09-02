@extends('employee.auth.master')
@section('title', 'Register')
@section('content')
<form action="{{route('register')}}" method="POST" class="pt-5" enctype="multipart/form-data">
    @csrf   
    <div class="row">
        {{-- <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="" placeholder="First Name">
            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Full Name">
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email Address">
            </div>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" id="from_date" name="birth_date" placeholder="Enter Your Birth Date">
            </div>
            @error('birth_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
            </div>
            @error('phone_number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <input type="file" class="form-control" name="image" placeholder="Phone Number">
            </div>
            @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <select name="gender" id="" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            @error('gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
    
        <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
             @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            </div>
            @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <div class="col-md-12">
            <p class="agree-privacy">By clicking the Sign Up button below you agreed to our privacy policy and terms of use of our website.</p>
        </div>
        <div class="col-md-6">
            <span class="go-login">Already a member? <a href="{{route('login')}}">Sign In</a></span>
        </div>
        <div class="col-md-6 text-right">
            <div class="form-group">
                <button type="submit" class="btn btn-primary sign-up">Sign Up</button>
            </div>
        </div>
    </div>
</form>

@endsection