@extends('employer.master')
@section('title', 'Edit Profile')
@section('content')
<div class="container-fluid mt-5">
    <form action="{{ route('employer.updateprofile', $employer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{ $employer->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" value="{{ $employer->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" name="phone_number" value="{{ $employer->phone_number }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">image</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Company Name</label>
            <input type="text" name="company_name" value="{{ $employer->company_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Edit</button>
    </form>
</div>

@endsection
