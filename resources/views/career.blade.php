@extends('layouts.main')

@section('page-title', 'Career')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/career/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/career/narrow.css') }}">
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

                    @if (isset($job['title']))
                        <div class="flexbox-break"></div>
                        <p class="job-header-element job-title">{{ $job['title'] }}</p>
                    @endif
                </div>

                <div class="job-details">
                    @if (isset($job['accomplishments']))
                        <div class="job-accomplishments">
                            @foreach ($job['accomplishments'] as $accomplishment)
                                <p class="job-accomplishment">{{ $accomplishment }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if (isset($job['skills']))
                        <div class="job-skills">
                            <p class="job-skills-header">Skills</p>
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
