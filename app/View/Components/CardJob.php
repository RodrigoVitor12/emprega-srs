<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardJob extends Component
{
    public $title;
    public $city;
    public $company;
    public $date;
    public $id;
    public $role;
    

    public function __construct($title, $city, $company, $date, $id, $role)
    {
        $this->title = $title;
        $this->city = $city;
        $this->company = $company;
        $this->date = $date;
        $this->id = $id;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-job');
    }
}