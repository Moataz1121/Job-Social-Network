
@extends('employer.master')

@section('title')
    Edit Post
@endsection

@section('content')
    <h1> Edit Post </h1>



    <form action="{{route('post.update', $post)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="emp_id" value="{{auth()->guard('employer')->user()->id}}">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label  class="form-label fs-5">Job Title</label>
                    <input type="text" name="title" placeholder="Job Title" value="{{ $post->title }}"
                           class="form-control" >
                    @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label  class="form-label fs-5">Location</label>
                    <input type="text" name="location" placeholder="Location" value="{{ $post->location }}"
                           class="form-control" >
                    @error('location')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label  class="form-label fs-5">Salary</label>
                    <input type="text" name="salary" placeholder="salary" value="{{$post->salary}}" }}"
                           class="form-control" >
                    @error('salary')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="select" class="fs-5 form-label">Work Type</label>
                    <select name="work_type" value='work_type' id="select" class="form-select form-control" aria-label="Default select example">
                        <option>{{$post->work_type}}</option>
                        @if ($post->work_type == 'Hybrid')
                            <option value="Remote">Remote</option>
                            <option value="On Site">On Site</option>
                            @elseif ($post->work_type == 'Remote') 
                            <option value="Hybrid">Hybrid</option>
                            <option value="On Site">On Site</option>
                            @else
                            <option value="Hybrid">Hybrid</option>
                            <option value="Remote">Remote</option>
                        @endif
                      </select>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label  class="form-label fs-5">Deadline</label>
                    {{-- <p class="form-control">{{ $post->deadline }}</p> --}}
                    <input type="date" name="deadline" placeholder="Deadline" value="{{ $post->deadline }}"
                           class="form-control" >
                    @error('deadline')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="select" class="fs-5 form-label"> Work Category</label>
                    <select name="category_id" id="select" class="form-select form-control" aria-label="Default select example">
                        <option disabled>{{$post->category->name}}</option>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach                                
                        @endif
                      </select>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label  class="form-label fs-5">Description</label>
                    <textarea name="description" class="form-control" style="height: 120px" id="" cols="30" rows="10">{{$post->description}}</textarea>
                    @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label  class="form-label fs-5">Skills</label>
                    <textarea name="skills" class="form-control" style="height: 120px" id="" cols="30" rows="10">{{$post->skills}}</textarea>
                    @error('skills')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection