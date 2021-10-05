@extends('layouts.main')

@section('page-title', 'Skills')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/skills/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/skills/narrow.css') }}">
@endpush

@section('content')
    <ol class="skills-list">
        @foreach ($skills as $skill)
            <li class="skill">{{ $skill }}</li>
        @endforeach
    </ol>
@endsection

