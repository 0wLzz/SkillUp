<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Experts extends Component
{
    /**
     * Create a new component instance.
     */
    public $tutors;
    public function __construct($tutors)
    {
        $this->tutors = $tutors;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.experts');
    }
}
