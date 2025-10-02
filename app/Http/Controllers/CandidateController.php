<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function show() {
        // pegar todos as vagas da empresa 
        $vacancies = Vacancy::where('user_id', Auth::id())->with('applies')->get() ;
        $candidates = $vacancies->flatMap(fn($vacancy) => $vacancy->applies);
        return view('company.candidates', ['candidates' => $candidates]);
    }
}