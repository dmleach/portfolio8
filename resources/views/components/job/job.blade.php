@if (isset($job))
    <div class="job">
        <div class="job-header">
            <p class="job-header-element job-company">{{ $job['company'] }}</p>

            @if (isset($job['start_date']) && isset($job['end_date']))
                <p class="job-header-element job-dates">{{ date('F Y', $job['start_date']) }} to {{ date('F Y', $job['end_date']) }}</p>
            @elseif (isset($job['start_date']) && !isset($job['end_date']))
                <p class="job-header-element job-dates">{{ date('F Y', $job['start_date']) }} to present</p>
            @endif

            @if (isset($job['title']))
                <div class="flexbox-break"></div>
                <p class="job-header-element job-title">{{ $job['title'] }}</p>
            @endif
        </div>

        @isset($job['accomplishments'])
            <x-job.accomplishments :accomplishments="$job['accomplishments']" />
        @endisset

        @isset($job['technologies'])
            <x-job.technologies :technologies="$job['technologies']" />
        @endisset

        @isset($job['systems'])
            <x-job.systems :systems="$job['systems']"/>
        @endisset
    </div>
@endif
