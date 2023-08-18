<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
            <a href="{{route('home')}}" class="navbar-brand"><img src="images/logo1.jpg" height="30" alt="LWN logo" alt=""></a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                    <li class=" {{Request::is('/')? 'active':''}}" ><a href="{{url('/')}}" class="nav-item nav-link">Home</a></li>
                    <li class=" {{Request::is('aboutus')? 'active':''}}" ><a href="{{url('/aboutus')}}" class="nav-link">About</a></li>
                    <li class="{{Request::is('service')? 'active':''}}" role="presentation"><a href="{{url('/service')}}" class="nav-item nav-link">Services</a></li>
                    <li class="{{Request::is('courses')? 'active':''}}" role="presentation"><a href="{{route('courses.index')}}" class="nav-item nav-link">Course</a></li>
                    @auth
                    @if(auth()->user()->isAdmin())
                    <li class="{{Request::is('admin')? 'active':''}}" role="presentation"><a href="{{route('admin.courses.index')}}" class="nav-item nav-link">Admin</a></li>
                    @endif
                    @endauth
                        @auth
                        <li class="" role="presentation"><a href="" onclick="getElementById('logout').sumbit()" class="nav-item nav-link">My Course</a></li>
                        <form id="logout" action="{{route('logout')}}" method="post">
                        @csrf
                        </form>
                                                
                        </ul>
@endauth
@guest 
         <ul class="nav-list nav-account" style="margin-top: 1rem">
                <li class="nav-item" style="width: 100%; text-align: center">
                <a
                    href="{{ route('login') }}"
                    class="button nav-link"
                    style="display: block; width: 100%"
                    >Login</a
                >
                </li>
                <li class="nav-item" style="width: 100%; text-align: center">
                <a
                    href="{{ route('register') }}"
                    class="button nav-link"
                    style="display: block; width: 100%"
                    >Register</a
                >
                </li>
            </ul>
         @endguest

          <div class="nav-close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <div class="nav-btns">
          <i class="bx bx-moon change-theme" id="theme-button"></i>
          @guest
          <div class="btn-account">
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
          </div>
          @endguest
          @auth
          <div class="nav-user" id="nav-user">
            <i class="bx bx-user-circle"></i> <small> {{ auth()->user()->name }} </small>
            <i class="bx bx-chevron-down"></i>
          </div>
          @endauth
          <div class="nav-toggle" id="nav-toggle">
          </div>
        </div>
      </div>

    <div class="dropdown" id="dropdown">
      <i class="bx bx-x dropdown-close" id="dropdown-close"></i>

      <a href="{{ route('courses.index') }}"><h2 class="dropdown-title-center">My Course</h2></a>
      <a href="#" onclick="getElementById('logout').submit()"><h2 class="dropdown-title-center">Logout</h2></a>
      <form id="logout" action="{{ route('logout') }}" method="post">
          @csrf
      </form>
    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>