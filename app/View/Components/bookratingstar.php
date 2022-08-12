<?php

namespace App\View\Components;

use Illuminate\View\Component;

class bookratingstar extends Component
{
    public $rating;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rating)
    {
        $this->rating = $rating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookratingstar');
    }
}
