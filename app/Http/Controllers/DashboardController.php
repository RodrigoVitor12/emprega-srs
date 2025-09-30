<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {
        $user = Auth::user();

        return view('dashboard', [
            'myCandidacies' => $user->allMyCandidacies(),
            'candidates'    => $user->allApplies(),
            'vacancies'     => $user->vacanciesWithCandidacyCount()
        ]);
    }
}