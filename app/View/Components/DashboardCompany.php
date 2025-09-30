<?php

namespace App\View\Components;

use App\Models\Vacancy;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class DashboardCompany extends Component
{
    public $candidates;
    public $vacancies;

    public function __construct($candidates, $vacancies)
    {
        $this->candidates = $candidates;
        $this->vacancies = $vacancies;
    }

    public function render(): View|Closure|string
    {
        // $vacancies = Vacancy::where('user_id', Auth::id())->get();
        return view('components.dashboard-company');
    }
}