
@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('content')
    <h1> Edit Category </h1>



    <form action="{{route('category.update', $category)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name="name" value="{{ $category->name }}"
                   class="form-control" >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

       
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection