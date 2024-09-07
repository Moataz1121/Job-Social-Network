@extends('employer.master')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div style="background-color: #f5f5f5" class="card-header">
            Post Creator info
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
               
                <div>
                    <small class="fs-5"><b class="fs-4">Title: </b> {{ $post->title }} </small>
                </div>
                <div>
                    <small class="fs-5"><b class="fs-4">Description : </b>{{ $post->description }}</small>
                </div>
                <div>
                    <small class="fs-5"><b class="fs-4">Category: </b>{{ $post->category->name }}</small>
                </div>
                <div>
                    <small class="fs-5"><b class="fs-4">Status: </b>{{ $post->status }}</small>
                </div>
                <div>
                    <small class="fs-5"><b class="fs-4">Created At:</b>
                        {{ $post->created_at->format('l dS F o ') }}
                    </small>
                </div>
                <div>
                    <small class="fs-5"><b class="fs-4">Updated At:</b>
                        {{ $post->updated_at->format('l dS F o ') }}
                    </small>
                </div>
    
            </blockquote>
        </div>
    </div>
</div>
@endsection