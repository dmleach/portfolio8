<html lang="en-US">
<head>
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/page-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/page-header.css') }}">
    @endpush

    {{--  Render everything in the css stack, which will contain stylesheets pushed
          by other templates  --}}
    @stack('css')

    {{--  Bring the page title from resources/views/components/page-title  --}}
    <x-page-title></x-page-title>
</head>

<body>
{{--  Bring the page header from resources/views/components/page-header  --}}
<x-page-header></x-page-header>

<div class="content-main">
    @yield('content')
</div>

{{--  Bring the page footer from resources/views/components/page-footer  --}}
<x-page-footer></x-page-footer>
</body>
</html>
