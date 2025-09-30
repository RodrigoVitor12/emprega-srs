<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboardCandidate extends Component
{
    public $myCandidacies;
    

    public function __construct($myCandidacies)
    {
        $this->myCandidacies = $myCandidacies;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-candidate');
    }
}