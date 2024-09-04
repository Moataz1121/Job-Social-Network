@extends('employer.master')


@section('content')
<div class="container mt-3">
    <h1 class="text-center">Applyed Jobs</h1>    

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>View CV</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($applyed as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->user->email}}</td>
                    <td>{{$item->user->phone_number}}</td>
                    <td>{{ $item->post->title }}</td>
                    <td>
                        <a href="{{ asset($item->resume) }}">Open the pdf!</a></td>
                   
                    </td>
                    

                </tr>
            @endforeach


        </tbody>

    </table>

</div>
@endsection