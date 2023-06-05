<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/contacts', function () {
    function getContacts()
    {
        return array(
            array('id' => 1, 'fname' => "fname 1", 'lname' => "lname 1", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 1"),
            array('id' => 2, 'fname' => "fname 2", 'lname' => "lname 2", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 2"),
            array('id' => 3, 'fname' => "fname 3", 'lname' => "lname 3", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 3"),
            array('id' => 4, 'fname' => "fname 4", 'lname' => "lname 4", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 4"),
            array('id' => 5, 'fname' => "fname 5", 'lname' => "lname 5", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 5"),
            array('id' => 6, 'fname' => "fname 6", 'lname' => "lname 6", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 6"),
            array('id' => 7, 'fname' => "fname 7", 'lname' => "lname 7", "phone" => 876729289, "email" => "mmm@mm.com", "company" => "Company 7")
        );
    }

    $contacts = getContacts();
    $companies = ["Company 1", "Company 2", "Company 3", "Company 4"];
    return view('contacts.index', [
        'contacts' => $contacts,
        'companies'=>$companies
        ]);
});

Route::get('/contacts/create', function () {
    return view('contacts.create');
});

Route::get('/contacts/{id}', function () {
    return view('contacts.show');
});
