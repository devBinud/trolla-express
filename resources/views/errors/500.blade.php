@extends('public.layout.layout')
@section('title', '500')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/public/bootstrap/css/bootstrap.min.css') }}">
    <style>
        .u-overlap.u-overlap-transparent .u-header {
            background-color: #332929 !important;
        }
    </style>
@endsection
@section('body')


    <main id="main" class="text-center">
        <img src="{{ asset('assets/errors/500.jpg') }}" alt="500 Image" id="not_found" class="img-responsive center-block mt-5"
            style="width: 500px;height:500px;">
    </main>
@endsection
@section('custom-js')
    <script src="{{ asset('assets/public/bootstrap/js/bootstrap.min.js') }}"></script>

@endsection
