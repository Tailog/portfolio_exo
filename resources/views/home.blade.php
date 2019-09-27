@extends('adminlte::page')

@section('title')
    {{$currentUser->name}} - Admin Panel
@endsection

@section('content')
    <div class="shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
        <div class="row d-flex align-items-center">
            <div class="col-4 text-center ">
                <img src="{{ asset('storage/'.$currentUser->avatar) }}" alt="" class="w-50 img-fluid rounded-circle">
                <div>
                    <h4 class="py-3">{{$currentUser->name}}</h4>
                </div>
            </div>
            <div class="col-8">
                <div class="m-5 p-3">
                    <ul class="list-group">
                        <h5 class="list-group-item">{{$currentUser->email}}</h5>
                        <h5 class="list-group-item">{{$currentUser->address ? $currentUser->address : 'Address Not Found'}}</h5>
                        <h5 class="list-group-item">{{$currentUser->phone_number ? $currentUser->phone_number : 'Phone Not Found'}}</h5>
                    </ul>
                    <div class="mt-3 text-right">
                        <a href="/admin/user/edit" class="btn-lg bg-green text-center">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
