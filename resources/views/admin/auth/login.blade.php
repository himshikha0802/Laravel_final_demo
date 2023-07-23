@extends('layouts.auth.layout')
@section('content')
<div class="login-box-body" style="background-color:#a5c9d1;border-style:ridge;border-color:black;border-pixel:10px;">

    @if(auth()->check())
    {{-- <pre>{{auth()->user()->full_name}}</pre> --}}
    @endif
    <form action="{{route('auth.login')}}" method="post">
      @csrf
      <div class="image-box">
        <figure>
            <img src="resources/admin/images/hlo/sign.webp" height="250px" width="305px" style="position: center;" alt="">
        </figure>
    </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('email')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('password')}}</span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <div class="col-xs-8">
          <a class="btn btn-primary" href="{{route('auth.register')}}" cc >Register a new membership</a>
        </div>

        <!-- /.col -->
      </div>
    </form>
  </div>
  @endsection
