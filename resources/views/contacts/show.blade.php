@extends('layouts.main')

@section('content')
    <div class="container m-3 pt-4 pb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="contact-name">Name:</label>
                    <p class="form-control-static" id="contact-name">John Doe</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="contact-email">Email:</label>
                    <p class="form-control-static" id="contact-email">johndoe@example.com</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="contact-phone">Phone:</label>
                    <p class="form-control-static" id="contact-phone">123-456-7890</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="contact-address">Address:</label>
                    <p class="form-control-static" id="contact-address">123 Main Street, City, State</p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="contact-company">Company:</label>
            <p class="form-control-static" id="contact-company">Company ABC</p>
        </div>
    </div>
    <div class="m-auto">
        <button class="btn btn-info">Edit</button>
        <button class="btn btn-outline-danger">Delete</button>
        <button class="btn btn-outline-secondary">Cancel</button>
    </div>
@endsection
