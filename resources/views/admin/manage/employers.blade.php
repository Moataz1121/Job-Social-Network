@extends('admin.master')
@section('title', 'Manage Employers')
@section('employers' , 'active')
@section('content')
@if (session('success'))
<div class="alert alert-danger mt-1">
    {{ session('success') }}
</div>
@endif

    <h1 class="text-center mt-3">Manage Employers</h1>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col"   >Action</th>
            </tr>
        </thead>
        <tbody>

            @if ($employers->count() > 0)
                @foreach ($employers as $employer)
                    <tr class="text-center">
                        <th scope="row">{{ $employer->id }}</th>
                        <td>{{ $employer->name }}</td>
                        <td>{{ $employer->email }}</td>
                        <td>
                            <a href="{{ route('employers.details', $employer->id) }}" class="btn btn-primary">Show Details</a>
                            <form action="{{ route('employers.delete', $employer->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection