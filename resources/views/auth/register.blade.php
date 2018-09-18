@extends('layouts.app')

@section('content')
<br>
<div class="wrapper">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-box">
        <div class="panel panel-login">
          <div class="login-logo" style="color: black; text-align: center">
            <img src="dist/img/logo.jpg" style="width:60px; height:60px;"> Jobs for Color Blind
          </div>
          <div class="login-box-body" style="padding: 20px">
            <form role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

              <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmed Password" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
              </div>
              <div class="row">
               <!--  <div class="col-xs-1"></div> -->
                <div class="col-xs-7">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> I agree to the terms
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <br>
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" >Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <br>
            <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
          </div>
          <!-- /.form-box -->
        </div>
      </div>
      <!-- /.register-box -->
    </div>
  </div>
</div>
@stop

