<?php

namespace App\View\Components\Job;

use Illuminate\View\Component;

class Accomplishments extends Component
{
    public $accomplishments;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($accomplishments)
    {
        $this->accomplishments = $accomplishments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job.accomplishments');
    }
}
