<?php

namespace App\View\Components\Job;

use Illuminate\View\Component;
use function PHPUnit\Framework\isEmpty;

class Technologies extends Component
{
    public $technologies;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($technologies)
    {
        $this->technologies = $technologies;
    }

    public function getTechnologiesAsHtml() {
        if (empty($this->technologies)) {
            return null;
        }

        $technologiesHtml = [];

        foreach ($this->technologies as $technology) {
            try {
                $technologyName = (string)$technology['name'];
            } catch (\Exception $e) {
                continue;
            }

            try {
                $technologyVersion = (string)$technology['version'];
            } catch (\Exception $e) {
                $technologyVersion = null;
            }

            $versionHtml = isset($technologyVersion) ? " <span class='job-technology-version'>{$technologyVersion}</span>" : null;
            $technologiesHtml[] = "<p class='job-technology'>{$technologyName}{$versionHtml}</p>";
        }

        return empty($technologiesHtml) ? null : $technologiesHtml;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job.technologies', ['technologiesHtml' => $this->getTechnologiesAsHtml()]);
    }
}
