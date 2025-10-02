<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function show() {
        // pegar todos as vagas da empresa 
        $candidates = Auth::user()->allMyCandidates()->with(['user', 'vacancy'])->get();
        return view('company.candidates', ['candidates' => $candidates]);
    }
}