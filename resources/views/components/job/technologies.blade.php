@isset($technologiesHtml)
    <div class="job-technologies">
        <p class="job-technologies-header">Technologies</p>
        @foreach ($technologiesHtml as $technologyHtml)
            {!!  $technologyHtml  !!}
        @endforeach
    </div>
@endisset

