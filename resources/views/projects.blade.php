@extends('layouts.main')

@section('page-title', 'Projects')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <div class="projects-list">
        @foreach (config('sitedata.projects.projects') as $projectName => $project)
            @if (is_array($project) === false)
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

