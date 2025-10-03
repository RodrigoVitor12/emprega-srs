<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index($id) {
        $user = User::find($id);
        if($user->id == Auth::id()) {
            return view('profile', ['user' => $user]);
        }
        return redirect()->back();
    }
}