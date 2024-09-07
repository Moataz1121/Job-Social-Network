@extends('employee.user.master')

@section('content')
       <div class="dd  text-center d-flex justify-content-center flex-column">
        <h1 class="text-center mt-5 " >Welcome to Home Page</h1>
        <div class="text-center ">
        <a href="{{ route('employee.job') }}" class="btn btn-primary">show our jobs</a></div>
       
    </div>
@endsection