@extends('layouts.spa')

@section('title_site')
    Hello World
@endsection

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700,700i,800,800i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800&amp;display=swap">
@endsection

@section('nav_bar')
    @include('templates.navbar')
@endsection

@section('banner')
    @include('templates.banner')
@endsection

@section('about')
    @include('templates.about')
@endsection

@section('services')
    @include('templates.services')
@endsection

@section('choose_me')
    @include('templates.choose_me')
@endsection

@section('portfolio')
    @include('templates.portfolio')
@endsection

@section('contact')
    @include('templates.contact')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('js_script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection