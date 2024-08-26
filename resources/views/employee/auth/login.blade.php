@extends('employee.auth.master')

@section('title', 'Login')
@section('content')
<form action="" method="">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="" placeholder="Email Address">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="password" class="form-control" name="" placeholder="Password">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <a href="forgot-password.html">Forgot password?</a>
        </div>
        <div class="col-md-6">
            <label class="custom-control material-checkbox">
                <input type="checkbox" class="material-control-input">
                <span class="material-control-indicator"></span>
                <span class="material-control-description">Remember Me</span>
            </label>
        </div>
        <div class="col-md-6 text-right">
            <div class="form-group">
                <button type="button" class="btn btn-primary sign-up">Sign In</button>
            </div>
        </div>
        {{-- <div class="col-md-12 text-center mt-4">
            <p class="text-muted">Start using your fingerprint</p>
            <a href="#" class="btn btn-outline-primary btn-sm sign-up" data-toggle="modal" data-target="#fingerprintModal">Use Fingerprint</a>
        </div> --}}
        <div class="col-md-12 text-center mt-5">
            <span class="go-login">Not yet a member? <a href="{{route('employee.register')}}">Sign Up</a></span>
        </div>
    </div>
</form>
@endsection