@isset($systemsHtml)
    <div class="job-systems">
        <p class="job-systems-header">Systems</p>
        @foreach ($getSystemsAsHtml as $systemHtml)
            {!!  $systemHtml  !!}
        @endforeach
    </div>
@endisset
