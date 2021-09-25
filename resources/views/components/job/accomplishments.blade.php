@if (isset($accomplishments))
    <div class="job-accomplishments">
        @foreach ($accomplishments as $accomplishment)
            <p class="job-accomplishment">{{ $accomplishment }}</p>
        @endforeach
    </div>
@endif
