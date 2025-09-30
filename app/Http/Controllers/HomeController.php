<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $vacancies = Vacancy::limit(3)->get();
        return view('welcome', ['vacancies' => $vacancies]);
    }
}