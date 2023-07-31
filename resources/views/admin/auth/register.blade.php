
@extends('layouts.auth.layout')
@section('content' )

<div class="register-box-body" style="background-color:#80f06c;border-color:black;border-style:ridge;border-pixel:10px;">

    <div class="image-box">
        <figure>
            <img src="resources/admin/images/admin.jpg" height="250px" width="305px" style="position: center;" alt="">
        </figure>
    </div>

    <form action="{{route('auth.register-user')}}" method="POST">
      @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{old('first_name')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('first_name')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{old('last_name')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('last_name')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('email')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('password')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
      </div>

      @if(session('msg'))
      <div class="form-group has-feedback" style="margin-top:20px">
        <span class="alert alert-success mt-2">{{session('msg')}}</span>
      </div>
      @endif
      @if($errors->any())
      <div class="form-group has-feedback" style="margin-top:20px">
        <span class="alert alert-success mt-2">{{$errors->first('msg')}}</span>
      </div>
      @endif
      <div class="row">
        <div class="col-xs-8">
          {{-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div> --}}
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Register</button>
        </div>

        <div class="col-xs-3" buttontype="button">
          <a class="btn btn-success" href="{{route('auth.login')}}" style="color:white;" class="text-center" class="btn btn-success btn-block btn-flat">Login </a>
        </div>

        <!-- /.col -->
      </div>
    </form>


    {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a> --}}
  </div>
  @endsection



