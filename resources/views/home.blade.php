@extends('layouts.main')

@section('content')
    <p>This is the home page</p>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
