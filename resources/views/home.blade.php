@extends('adminlte::page')

@section('title')
    {{$currentUser->name}} - Admin Panel
@endsection

@section('content')
    <div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border mx-auto container">
        <div class="text-center w-50 mx-auto">
            <img src="{{ asset('storage/'.$currentUser->avatar) }}" alt="" class="w-25 img-fluid rounded-circle">
        </div>
        <div class="m-5 p-3 shadow-sm bg-white rounded border">
            <h3>{{$currentUser->name}} ({{$currentUser->email}})</h3>
        </div>
    </div>
@stop
