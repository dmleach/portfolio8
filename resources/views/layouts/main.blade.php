<html lang="en-US">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @hasSection('css')
        @yield('css')
    @endif

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
</body>
</html>
