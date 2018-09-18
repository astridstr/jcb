<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin JCB</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            background-image: url({{asset('dist/img/bglogin.jpg')}});
            background-size: cover;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
  @include('admin.navbar.navbar')
<br>
<div class="wrapper">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-box">
        <div class="panel panel-login">
          <div class="login-logo" style="color: black; text-align: center">
            <img src="{{asset('dist/img/logo.jpg')}}" style="width:60px; height:60px;"> Jobs for Color Blind
          </div>
          <div class="login-box-body" style="padding: 20px">
            <form role="form" method="POST" action="#">
             {{ csrf_field() }}

             <div class="form-group has-feedback">
               <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
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
              <!-- /.col -->
              <div class="col-xs-12">
                <button type="submit" value="Login" class="btn btn-warning btn-block" >Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
