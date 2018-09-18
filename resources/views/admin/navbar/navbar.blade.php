<div id="app-layout">
<nav class="navbar navbar-inverse bg-inverse navbar-default navbar-static-top" style="background-color: #263238;">
<div class="container">
  <div class="navbar-header">
  <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
      <span class="sr-only">Toggle Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <!-- Branding Image -->
    <a class="navbar-brand" href="#">
      <img src="{{asset('dist/img/logo.jpg')}}" style="width:41px; height:41px; margin: -10px; margin-left: 6px;">
    </a>
  </div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
  <!-- Right Side Of Navbar -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guard('admin')->check())
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Admin <span class="caret"></span>
          </a>
        <ul class="dropdown-menu" style="height: 60px; width: 250px;" role="menu">
            <div class="list-group">
              <li>
                <a class="list-group-item" href="{{ url('/home') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
              </li>
              <li>
                <a class="list-group-item" href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a>
              </li>
          </div>
        </ul>
    </li>
    @else
    <li><a style="color: white;" href="{{ url('/admin/login') }}">Sign In</a></li>

    @endif  
</ul>
          </div>
        </div>
</div>
</nav>
</div>