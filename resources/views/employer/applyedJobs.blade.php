@extends('employer.master')
@section('title', 'Applyed Jobs')
@section('app.active', 'active')
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
                <th>Action</th>
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

                    <td>
                    <div class="mb-5">
                    <form action="{{ route('employer.sendMail', $item->id) }}" method="POST">
                        @csrf
                        @error('status')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <div>
                            <select class="form-select form-control" name="status" aria-label="Default select example">
                                <option disabled value="{{ $item->post->status }}">{{ $item->post->status }}</option>
                                <option value="accepted">Accept</option>
                                <option value="rejected">Reject</option>
                            </select>
                            <input type="submit" class="btn btn-primary mt-3 fs-5 w-100" height="12.5rem"
                                value="Submit & Mail">
                        </div>
                    </form>
                </div>
                    </td>


                </tr>
            @endforeach


        </tbody>

    </table>

</div>
@endsection
