<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class courseCard extends Component
{

    public function __construct(
        public $course
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    function render(): View|Closure|string
    {
        return view('components.card.course-card');
    }
}
