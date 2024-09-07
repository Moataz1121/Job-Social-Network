
@extends('admin.master')

{{-- @section('category' , 'active') --}}

@section('title')
    Create Category
@endsection

@section('content')
    <h1> Add new Category </h1>



    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="form-control" >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

       
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection