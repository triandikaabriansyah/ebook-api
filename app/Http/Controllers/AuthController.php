<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me(){
        return [
            "NIS" => 3103118134,
            "Nama" => "Triandika Abriansyah",
            "Gender" => "Laki-Laki",
            "Phone" => 6285601008479,
            "Class" => "XII RPL 4"
        ];
    }
}