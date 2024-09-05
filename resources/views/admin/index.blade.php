@extends('admin.master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="btn-group mt-5 container" role="group" aria-label="Status Filter">
        <a href="{{ route('admin.index') }}" class="btn btn-secondary me-2">All</a>
        <a href="{{ route('admin.index', ['status' => 'pending']) }}" class="btn btn-primary me-2">Pending</a>
        <a href="{{ route('admin.index', ['status' => 'accepted']) }}" class="btn btn-success me-2 ">Accepted</a>
        <a href="{{ route('admin.index', ['status' => 'rejected']) }}" class="btn btn-danger ">Rejected</a>

    </div>

    <div class=" row d-flex flex-row">
    @foreach ($posts as $post)

            <div class="card mt-5 col-md-4 mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h3>By : {{ $post->employer->name }}</h3>
                    <h5 class="card-title">Title : {{ $post->title }}</h5>
                    <h6 class="card-subtitle my-2 text-muted">Category : {{ $post->category->name }}</h6>
                    <p class="card-text"> Work : {{ $post->work_type }}.</p>
                    <p class="card-text"> Status : {{ $post->status }}.</p>
                    <a href="{{ route('admin.details', $post->id) }}" class="btn btn-primary">Show Details</a>
                </div>
            </div>

    @endforeach
</div>
@endsection
