@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        {{-- <img src="{{asset('images/user_image/'.$image)}}" alt="no image">
        <img src="{{asset('images/user_image/'.$image)}}" alt=""> --}}
        <img src="{{ asset('images/user_images/' .Auth::user()->image) }}" alt="'s profile picture" class="img-fluid">
    </div>
</div>
@endsection
