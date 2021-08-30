@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/project-details.css') }}">
@endpush

@php
    // Get the contents of the projects config file
    $projectsData = Config::get('sitedata.projects.projects') ?? [];

    // Get the data for the selected project, which will be at the index matching the project's name.
    // Because of the null coalescing above, we can be sure $project contains an array, so this reference
    // is safe; because of this null coalescing, references below will be safe
    $project = $projectsData[$projectName] ?? [];
@endphp

@isset($project['title'])
    @section('page-title', $project['title'])
@else
    @section('page-title', $projectName)
@endisset


@section('content')
    <div class="project-details">
        <div class="project-details-primary">
            <div class="project-details-description">
                @if(is_array($project['description'] ?? null))
                    @isset($project['description']['long'])
                        <p class="project-details-description">{{ $project['description']['long'] }}</p>
                    @else
                        @isset($project['description']['short'])
                            <p class="project-details-description">{{ $project['description']['short'] }}</p>
                        @endisset
                    @endisset
                @endif
            </div>

            @if(is_array($project['notes'] ?? null))
                <div class="project-details-notes">
                    <h2 class="project-details-header">Notes</h2>

                    @foreach($project['notes'] as $note)
                        <p class="project-details-note">{{ $note }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="project-details-secondary">
            @if(is_array($project['technologies'] ?? null))
                <div class="project-details-technologies">
                    <h2 class="project-details-header">Technologies</h2>

                    @foreach($project['technologies'] as $technology)
                        @if (is_array($technology) === false)
                            @continue
                        @endif

                        @isset($technology['technology'])
                            <p class="project-details-technology">
                                {{ $technology['technology'] }}

                                @isset($technology['version'])
                                    <span class="project-details-technology-version">{{ $technology['version'] }}</span>
                                @endisset
                            </p>
                        @endisset
                    @endforeach
                </div>
            @endif

            @if(is_array($project['links'] ?? null))
                <div class="project-details-links">
                    <h2 class="project-details-header">Links</h2>

                    @foreach($project['links'] as $linkName => $linkUrl)
                        <a class="project-details-link" href="{{ $linkUrl }}" target="_blank">{{ $linkName }}</a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{--    <div class="projects-list">--}}
    {{--        @foreach (config('sitedata.projects.projects') as $project)--}}
    {{--            <div class="projects-list-item">--}}
    {{--                @isset($project)--}}
    {{--                    @isset($project['title'])--}}
    {{--                        @isset($project['name'])--}}
    {{--                            <a class="projects-list-title" href="{{ url('/projects/' . $project['name']) }}">{{ $project['title'] }}</a>--}}
    {{--                        @else--}}
    {{--                            <p class="projects-list-title">{{ $project['title'] }}</p>--}}
    {{--                        @endisset--}}
    {{--                    @endisset--}}

    {{--                    @isset($project['description'])--}}
    {{--                        <p class="projects-list-description">{{ $project['description'] }}</p>--}}
    {{--                    @endisset--}}

    {{--                @endisset--}}
    {{--            </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
@endsection

