<title>
    {{ config('app.name') }}

    @hasSection('page-title')
        - @yield('page-title')
    @endif
</title>
