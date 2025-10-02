<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

class ProfileController extends Controller
{
    public function index($id) {
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }
}