<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me() {
        return [
            "nis"=>"3103118065",
            "name"=>"feri wirawan susyono",
            "gender"=>"laki-laki",
            "phone"=>"0821329143",
            "class"=>"XII RPL 2",
        ];
    }
}
