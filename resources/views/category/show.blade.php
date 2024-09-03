@extends('admin.master')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title">{{$category->name}}</h3>
        <a href="{{route('category.index')}}" class="btn btn-primary">Back to all categories</a>
    </div>
</div>
@endsection