<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NIS" => "3103118058",
            "Name" => "Fadilla Nur Annisa",
            "Gender" => "Perempuan",
            "Phone" => "6281227632203",
            "Class" => "XII RPL 2"
        ];
    }
}
