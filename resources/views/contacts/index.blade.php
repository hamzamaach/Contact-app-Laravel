@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Company</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        @isset($contacts)
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact['id']}}</th>
                    <td>{{$contact['fname']}}</td>
                    <td>{{$contact['phone']}}</td>
                    <td>{{$contact['email']}}</td>
                    <td>{{$contact['company']}}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn btn-outline-info">i</button>
                            <button class="btn btn-outline-dark">i</button>
                            <button class="btn btn-outline-danger">i</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        @endisset
    </table>
@endsection
