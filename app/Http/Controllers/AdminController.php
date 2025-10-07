<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function index() {
        if(Auth::user()->role != 0) {
            return redirect()->back();
        }
        return view('admin.index');
    }
}