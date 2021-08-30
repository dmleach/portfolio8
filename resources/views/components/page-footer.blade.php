@push('css')
    {{-- These stylesheets aren't in use; they're here for when I figure out the late-loading problem.
         In the meantime the stylesheets that are actually in use are in main.blade.php --}}
    <link rel="stylesheet" href="{{ asset('css/page-footer/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/page-footer/narrow.css') }}">
@endpush

<div class="page-footer">
    <p class="page-footer-text">Dave Leach &copy; {{ now()->year }}</p>
    <p class="page-footer-text">dave@davedoeswork.com</p>
    <nav class="page-footer-links">
        <a class="page-footer-link" href="https://www.github.com/dmleach" target="_blank">
            <x-fontawesome-github class="page-footer-icon"></x-fontawesome-github>
        </a>
        <a class="page-footer-link" href="https://www.linkedin.com/in/dmleach" target="_blank">
            <x-fontawesome-linkedin class="page-footer-icon"></x-fontawesome-linkedin>
        </a>
    </nav>
</div>
