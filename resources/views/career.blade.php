@extends('layouts.main')

@section('page-title', 'Career')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/career.css') }}">
@endpush

@section('content')
    @foreach (config('sitedata.career.jobs') as $job)
        @if (isset($job))
            <div class="job">
                <div class="job-header">
                    <p class="job-header-element job-company">{{ $job['company'] }}</p>

                    @if (isset($job['start_date']) && isset($job['end_date']))
                        <p class="job-header-element job-dates">{{ date('F Y', $job['start_date']) }} to {{ date('F Y', $job['end_date']) }}</p>
                    @endif
                </div>

                <div class="job-details">
                    <div class="job-accomplishments">
                        @if (isset($job['title']))
                            <p class="job-title">{{ $job['title'] }}</p>
                        @endif

                        @if (isset($job['accomplishments']))
                            @foreach ($job['accomplishments'] as $accomplishment)
                                <p class="job-accomplishment">{{ $accomplishment }}</p>
                            @endforeach
                        @endif
                    </div>

                    @if (isset($job['skills']))
                        <div class="job-skills">
                            @foreach ($job['skills'] as $skill)
                                @if (isset($skill['technology']))
                                    <p class="job-skill">
                                        <span class="job-skill-technology">{{ $skill['technology'] }}</span>

                                        @if (isset($skill['version']))
                                            <span class="job-skill-version">{{ $skill['version'] }}</span>
                                        @endif
                                    </p>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
@endsection
