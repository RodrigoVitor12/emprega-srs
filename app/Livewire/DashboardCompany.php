<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardCompany extends Component
{   
    public $candidates;
    public $vacancies;

    public function mount() {
        $user = Auth::user();
        $this->candidates = $user->allApplies();
        $this->vacancies = $user->vacanciesWithCandidacyCount();
    }

    public function render()
    {
        return view('livewire.dashboard-company');
    }
}