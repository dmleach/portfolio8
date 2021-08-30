@push('css')
    <link rel="stylesheet" href="{{ asset('css/page-footer.css') }}">
@endpush

<div class="page-footer">
    <p class="page-footer-text">Dave Leach &copy; {{ now()->year }}</p>
    <nav class="page-footer-links">
        <a class="page-footer-link" href="https://www.github.com/dmleach" target="_blank">
            <x-fontawesome-github class="page-footer-icon"></x-fontawesome-github>
        </a>
        <a class="page-footer-link" href="https://www.linkedin.com/in/dmleach" target="_blank">
            <x-fontawesome-linkedin class="page-footer-icon"></x-fontawesome-linkedin>
        </a>
    </nav>
</div>
