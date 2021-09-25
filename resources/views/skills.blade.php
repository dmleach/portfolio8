@extends('layouts.main')

@section('page-title', 'Skills')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/skills/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/skills/narrow.css') }}">
@endpush

@section('content')
    @php
        $skillsList = [];
    @endphp

    <div class="skills-list">
        @foreach (config('sitedata.career.jobs') as $job)
            @if (is_array($job) === false)
                @continue
            @else
                $jobSkills = $job['skills'] ?? null;
            @endif

            @if (is_null($jobSkills))
                @continue
            @endif

            <div class="projects-list-item">
                @isset($project['title'])
                    <a class="projects-list-title" href="{{ url('/projects/' . $projectName) }}">{{ $project['title'] }}</a>
                @else
                    <a class="projects-list-title">{{ $projectName }}</a>
                @endisset

                @if(is_array($project['description'] ?? null))
                    @isset($project['description']['short'])
                        <p class="projects-list-description">{{ $project['description']['short'] }}</p>
                    @endisset
                @endif
            </div>
        @endforeach
    </div>
@endsection

