@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="bg-info text-white p-4">
            <h2 class="d-inline">All contacts</h2>
            <a href="/contacts/create" class="btn btn-success d-inline float-end">Add new +</a>
        </div>
        <div class="row">
            <div class="col-2">
                @include('contacts.sous-vues._company-selection')
            </div>
            <div class="col-2">
                @include('contacts.sous-vues._filter')
            </div>
        </div>
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
            <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <th scope="row">{{ $contact['id'] }}</th>
                    <td>{{ $contact['fname'] }}</td>
                    <td>{{ $contact['phone'] }}</td>
                    <td>{{ $contact['email'] }}</td>
                    <td>{{ $contact['company'] }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn btn-outline-info"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No contacts found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
