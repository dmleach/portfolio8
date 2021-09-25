<?php

namespace App\View\Components\Job;

use Illuminate\View\Component;

class Systems extends Component
{
    public $systems;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($systems)
    {
        $this->systems = $systems;
    }

    public function getSystemsAsHtml() {
        if (empty($this->systems)) {
            return null;
        }

        $systemsHtml = [];

        foreach ($this->systems as $system) {
            try {
                $systemName = (string)$system;
            } catch (\Exception $e) {
                continue;
            }

            $systemsHtml[] = "<p class='job-system'>{$systemName}</p>";
        }

        return empty($systemsHtml) ? null : $systemsHtml;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job.systems', ['systemsHtml' => $this->getSystemsAsHtml()]);
    }
}
