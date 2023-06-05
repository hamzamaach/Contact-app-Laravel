@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Add new contact</h2>
        <form>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" rows="3" placeholder="Enter Address"></textarea>
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <select class="form-control" id="company">
                    <option value="">Select Company</option>
                    <option value="company1">Company 1</option>
                    <option value="company2">Company 2</option>
                    <option value="company3">Company 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection
