<html>
<head>
    <title>{{ config('app.name') }} @if (@isset($title)) @yield('title') @endif</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
@section('nav')
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/career') }}">Career</a>
        <a href="{{ url('/projects') }}">Projects</a>
    </nav>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
