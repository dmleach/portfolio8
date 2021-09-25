@extends('layouts.main')

@section('page-title', 'Career')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/career/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/career/narrow.css') }}">
@endpush

@section('content')
    @foreach (config('sitedata.career.jobs') as $job)
        <x-job.job :job="$job" />
    @endforeach
@endsection
