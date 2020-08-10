<?php
 
 namespace App\Http\Controllers;

 use App\Http\Controllers\Controller;

 class AuthController extends Controller {
     public function me() {
         return [
             "nis" => 3103118058,
             "name" => "Fadilla Nur Annisa",
             "gender" => "Perempuan",
             "phone" => 6281227632203,
             "class" => "XII RPL 2"
         ];
     }
 }

   