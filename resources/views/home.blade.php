@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home/standard.css') }}">
    <link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('css/home/narrow.css') }}">
@endpush

@section('content')
    <div class="home-content">
        @foreach ($tiles as $tile)
            @isset($tile['text'])
                @isset($tile['colorClass'])
                    <div class="home-content-frame {{ $tile['colorClass'] }}">
                @else
                    <div class="home-content-frame">
                @endisset

                    <p class="home-content-text">{{ $tile['text'] }}</p>
                </div>
            @endisset
        @endforeach
    </div>
@endsection

