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
            <form role="form" method="POST" action="{{ url('/login') }}">
             {{ csrf_field() }}

             <div class="form-group has-feedback">
               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
               <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               @if ($errors->has('email'))
               <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div class="row">

              <div class="col-xs-6">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-12">
                <button type="submit" class="btn btn-warning btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <br>
          <a class="text-center" href="{{ url('/password/reset') }}">I forgot my password</a><br>
          <a href="{{ url('/register') }}" style="text-align: center;">Register a new membership</a>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

