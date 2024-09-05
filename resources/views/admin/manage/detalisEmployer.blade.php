@extends('admin.master')

@section('content')
<div class="d-flex justify-content-center aligin-items-center mt-4">
    <div class="card mt-2 " style="width: 18rem;">
        <img src="{{asset('images/user_images/'.$employer->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$employer->name}}</h5>
          <p class="card-text">{{$employer->email}}</p>
          <p class="card-text">{{$employer->phone_number}}</p>
          <p class="card-text">{{$employer->birth_date}}</p>
          <p class="card-text">{{$employer->gender}}</p>
    
    
    
          <a href="{{route('admin.employers')}}" class="btn btn-primary">Go Back</a>
        </div>
      </div>
</div>
@endsection