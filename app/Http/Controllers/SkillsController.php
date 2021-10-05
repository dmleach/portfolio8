<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = [];
        $configKeys = ['sitedata.career.jobs', 'sitedata.projects.projects'];

        foreach ($configKeys as $configKey) {
            $jobsOrProjects = config($configKey);

            foreach ($jobsOrProjects as $jobOrProject) {
                foreach ($jobOrProject['technologies'] ?? [] as $technology) {
                    if ($technology['name'] ?? false) {
                        $skills[] = $technology['name'];
                    }
                }
            }
        }

        $skills = array_unique($skills);
        sort($skills, SORT_STRING | SORT_FLAG_CASE);

        return view('skills', [
            'skills' => $skills
        ]);
    }
}
