@extends('employee.auth.master')
@section('title', 'Register')
@section('content')
<form action="" method="" class="pt-5">
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
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email Address">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" id="from_date" name="date" placeholder="Enter Your Birth Date">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
            </div>
        </div>
        <div class="col-md-12">
            <p class="agree-privacy">By clicking the Sign Up button below you agreed to our privacy policy and terms of use of our website.</p>
        </div>
        <div class="col-md-6">
            <span class="go-login">Already a member? <a href="{{route('employee.login')}}">Sign In</a></span>
        </div>
        <div class="col-md-6 text-right">
            <div class="form-group">
                <button type="button" class="btn btn-primary sign-up">Sign Up</button>
            </div>
        </div>
    </div>
</form>

@endsection