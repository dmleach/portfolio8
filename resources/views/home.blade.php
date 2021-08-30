@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/home/narrow.css') }}">
@endpush

@section('content')
    @php (
        $frameColors = [
            'home-content-frame-color-1',
            'home-content-frame-color-2',
            'home-content-frame-color-3',
        ]
    ) @endphp

    @php ( $frameColorsAvailable = [] ) @endphp

    <div class="home-content">
        @foreach (config('sitedata.home.items') as $item)
            @if (count($frameColorsAvailable) == 0)
                @php ( $frameColorsAvailable = $frameColors ) @endphp
            @endif

            @php ( $idxColor = array_rand($frameColorsAvailable) ) @endphp

            <div class="home-content-frame {{ $frameColorsAvailable[$idxColor] }}">
                <p class="home-content-text">{{ $item }}</p>
            </div>

            @php ( array_splice($frameColorsAvailable, $idxColor, 1) )
        @endforeach
    </div>
@endsection

