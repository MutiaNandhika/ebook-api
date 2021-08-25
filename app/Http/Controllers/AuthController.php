<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "NISN" => 3103119128,
            "Nama" => "Mutia Nandhika",
            "Gender" => "Female",
            "Phone" => 6281229938305,
            "Kelas" => "XII RPL 4",
        ];
    }
}
