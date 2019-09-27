@extends('adminlte::page')

@section('title')
    {{$currentUser->name}} - Admin Panel
@endsection

@section('content')
<div class="card card-primary m-3">
  <div class="card-header">
    <h3 class="card-title">Edit Profile</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form enctype="multipart/form-data" method="POST" action="/admin/user">
    @csrf
    @method('PATCH')
    <div class="card-body">
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" required value="{{$currentUser->name}}">
        @if ($errors->has('name'))
              <div class="text-danger">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
         @endif
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required value="{{$currentUser->email}}">
        @if ($errors->has('email'))
              <div class="text-danger">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="number" class="form-control" name="phone_number" placeholder="+3200000000" value="{{$currentUser->phone_number}}">
        @if ($errors->has('phone_number'))
              <div class="text-danger">
                  <strong>{{ $errors->first('phone_number') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="{{$currentUser->address}}">
        @if ($errors->has('address'))
              <div class="text-danger">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
       @endif
      </div>
      <div class="input-group mb-3 mx-auto">
          <label>Avatar</label>
          <div class="w-100">
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01"
                  aria-describedby="inputGroupFileAddon01" name="avatar">
                  <label class="custom-file-label" for="inputGroupFile01">{{$currentUser->avatar ? $currentUser->avatar : 'Choose an avatar'}}</label>
              </div>
          </div>
          @if ($errors->has('avatar'))
              <div class="text-danger">
                  <strong>{{ $errors->first('avatar') }}</strong>
              </span>
          @endif
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>   
</div>
@endsection

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    @stack('js')
    @yield('js')
@stop