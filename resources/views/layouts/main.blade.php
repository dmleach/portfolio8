<html lang="en-US">
<head>
    {{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/page-footer.css') }}">
    @endpush

    {{--  Render everything in the css stack, which will contain stylesheets pushed
          by other templates  --}}
    @stack('css')

    {{--  Bring the page title from resources/views/components/page-title  --}}
    <x-page-title></x-page-title>
</head>

<body>
{{--  Bring the main menu from resources/views/components/main-menu  --}}
<x-main-menu></x-main-menu>

@hasSection('page-title')
    <h1>@yield('page-title')</h1>
@endif

<div class="content-main">
    @yield('content')
</div>

{{--  Bring the page footer from resources/views/components/page-footer  --}}
<x-page-footer></x-page-footer>
</body>
</html>
