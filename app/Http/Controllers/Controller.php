<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
//function findContactById($contacts, $id) {
//    foreach ($contacts as $contact) {
//        if ($contact['id'] == $id) {
//            return $contact;
//        }
//    }
//    return null;
//}
