@extends('admin.master')

@section('content')
    <h1 class="text-center mt-3">Manage Users</h1>

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

            @if ($users->count() > 0)
                @foreach ($users as $user)
                    <tr class="text-center">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.details', $user->id) }}" class="btn btn-primary">Show Details</a>
                            <form action="{{ route('users.delete', $user->id) }}" class="d-inline" method="POST"
                                onsubmit="confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif



        </tbody>
    </table>
@endsection