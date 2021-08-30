<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @push('css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/page-footer/standard.css') }}">
        <link rel="stylesheet" media="screen and (max-width:500px)" href="{{ asset('css/page-footer/narrow.css') }}">
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
