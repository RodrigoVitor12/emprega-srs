<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterAsWhoController extends Controller
{
    public function login () {
        return view('loginaswho');
    }

    public function register () {
        return view('registeraswho');
    }
}