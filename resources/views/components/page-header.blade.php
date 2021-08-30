@push('css')
    <link rel="stylesheet" href="{{ asset('css/page-header.css') }}">
@endpush

<div class="page-header">
    <nav class="page-header-menu">
        <a class="page-header-menu-item" href="{{ url('/') }}">Home</a>
        <a class="page-header-menu-item" href="{{ url('/career') }}">Career</a>
        <a class="page-header-menu-item" href="{{ url('/projects') }}">Projects</a>
        <a class="page-header-menu-item" href="{{ url('/contact') }}">Contact</a>
    </nav>

    @hasSection('page-title')
        <h1 class="page-header-title">@yield('page-title')</h1>
    @endif
</div>

