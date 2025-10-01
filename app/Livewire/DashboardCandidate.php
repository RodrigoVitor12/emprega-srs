<?php

namespace App\Livewire;

use App\Models\Apply;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardCandidate extends Component
{
    public $myCandidacies;

    public function mount() {
        $user = Auth::user();
        $this->myCandidacies = $user->allMyCandidacies();
    }
    
    public function render()
    {
        return view('livewire.dashboard-candidate');
    }

    public function destroy($id) {
         Apply::where('user_id', Auth::id())->where('vacancy_id', $id)->delete();
         $this->myCandidacies = Auth::user()->allMyCandidacies();
    }   
}