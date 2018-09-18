<div id="app-layout">
<nav class="navbar navbar-inverse bg-inverse navbar-default navbar-static-top" style="background-color: #263238;">
<div class="container">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('dist/img/logo.jpg')}}" style="width:41px; height:41px; margin: -10px; margin-left: 6px;">
    </a>

  </div>

  <div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->  
    <div class="nav navbar-nav">
    @if (Auth::guest())
    @else
        <form class="form-inline" style="margin-top: 10px; width: 250px;" action="{{ url('/search') }}" method="get">
        <ul>
          <li><div class="form-inline">
            <input class="form-control col-sm-2" style="vertical-align: baseline;" type="text" placeholder="Search..." name="Search">
            <button class="btn btn-outline-info mr-sm-3" type="submit"><i class="fa fa-search"></i></button>
          </div>
          </li>
        </ul>
        </form>      
     @endif    
    </div>

    <!-- Right Side Of Navbar -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      @else
        <li class="dropdown messages-menu">
            <a href="{{ url('/home') }}">
                <i class="fa fa-home fa-2x"></i>
            </a>
        </li> 
        <li class="dropdown messages-menu">
          <a href="{{ url('/job') }}">
            <i class="fa fa-briefcase fa-2x"></i>
          </a>
        </li> 

<!-- Tasks: style can be found in dropdown.less -->

<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <img style="height: 22px; width: 22px;" src="{{asset('fotoupload/'. Auth::user()->profpic)}}" class="user-image img-circle" alt="User Image">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" style="width: 250px;" role="menu">
        <li style="text-align: center; margin: 7px; padding: 4px; color: #333;"><img style="height: 100px; width: 100px; border: 2px solid white;" src="{{asset('fotoupload/'. Auth::user()->profpic)}}" class="user-image img-circle" alt="User Image">
        <br><br><b>{{ Auth::user()->name }}</b>
        <br><br><br>
            </li>
            <div class="list-group">
              <a class="list-group-item" href="{{ url('/home') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
              <a class="list-group-item" href="{{ url('/username-profile') }}"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; View profile</a>
              <a class="list-group-item" href="{{ url('/setting') }}"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
              <a class="list-group-item" href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a>
          </div>
    </ul>
</li>
@endif
</ul>
          </div>
  </div>
</div>
</nav>
</div>
  