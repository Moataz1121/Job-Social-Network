@extends('employer.master')


@section('content')
<div class="container mt-3">
    <h1 class="text-center">Applyed Jobs</h1>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>View CV</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($applyed as $item)
                <tr class="text-center">
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
