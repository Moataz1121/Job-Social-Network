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
            <div class="col-3 m-3 bg-white p-0 shadow rounded" style="width: 439px;">
                <div class="d-flex justify-content-between p-3" style="height:120px;">
                    <div>
                        <h5>{{ $post->title }}</h5>
                        <h6 class="mb-3">{{ $post->category->name }}</h6>
                        <p class="mb-3"><i class="fa-regular fa-user me-1"></i>Employer:
                            <b>{{ $post->employer->name }}</b>
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('admin.details', $post->id) }}" class="btn btn-outline-dark btn-dark">Show
                            Details</a>
                    </div>
                </div>
                <div class="w-100 p-2 d-flex align-items-center justify-content-evenly rounded-bottom"
                    style="background-color: hsl(0, 0%, 95%); height:40px;">
                    <div>
                        <i class="fa-solid fa-briefcase text-secondary me-2"></i>
                        @if ($post->work_type === 'onSite')
                            <span class="text-secondary ">On Site</span>
                        @else
                            <span class="text-secondary ">{{ $post->work_type }}</span>
                        @endif
                    </div>
                    <div>
                        <i class="fa-regular fa-money-bill-1 me-2 text-secondary"></i>
                        <span class="">{{ $post->salary }}$</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar-days me-2 text-secondary"></i>
                        <span class="">{{ $post->created_at->format('D, dS M Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection
