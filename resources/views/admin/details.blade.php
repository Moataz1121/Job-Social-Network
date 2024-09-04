@extends('admin.master')

@section('content')
    <div class="card-body bg-light rounded-2 mt-4 shadow">
        <blockquote class="blockquote mb-0">
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Employer name: </b> {{ $post->employer->name }} </small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Employer email: </b> {{ $post->employer->email }} </small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Title: </b> {{ $post->title }} </small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Category: </b>{{ $post->category->name }}</small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Description : </b>{{ $post->description }}</small>
            </div>

            <div class = "mb-3">
                <div class="fs-5"><b class="fs-4">Skills: </b>
                    <ul>
                        @foreach (explode('-', $post->skills) as $key => $skill)
                            @if ($key > 0)
                                <li>{{ $skill }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Location: </b>{{ $post->location }}</small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Work Type: </b>{{ $post->work_type }}</small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Salary: </b>{{ $post->salary }} USD</small>
            </div>
            <div class = "mb-3">
                <small class="fs-5"><b class="fs-4">Created At:</b>
                    {{ $post->created_at->format('l dS F o H:i:s A') }}
                </small>
            </div>

        </blockquote>

        <form action="{{ route('admin.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <select class="form-select form-control" name="status" aria-label="Default select example">
                    <option disabled value="{{ $post->status }}" selected>{{ $post->status }}</option>

                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>


                </select>

                @error('status')
                    <span class="alert alert-danger my-5">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="Submit & Mail">
        </form>
    </div>
@endsection
