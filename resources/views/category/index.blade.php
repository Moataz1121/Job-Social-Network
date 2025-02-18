@extends('admin.master')
@section('category' , 'active')
@section('content')

@if (session('success'))
<div class="alert alert-danger mt-1">
    {{ session('success') }}
</div>
@endif
@if (session('update_success'))
<div class="alert alert-success text-dark mt-1">
    {{ session('update_success') }}
</div>
@endif
@if (session('create_success'))
<div class="alert alert-success text-dark mt-1">
    {{ session('create_success') }}
</div>
@endif


    <a href="{{ route('category.create') }}" class="btn btn-primary w-25 my-5"> Create New Category</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="{{ route('category.show', $item) }}" class="btn btn-info"> View</td>
                    <td> <a href="{{ route('category.edit', $item) }}" class="btn btn-success"> Update</a>
                    </td>
                    <td>
                        <form action="{{ route('category.destroy', $item) }}" method="POST" >

                            @csrf
                            @method('DELETE')

                            <input onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>

    </table>
@endsection