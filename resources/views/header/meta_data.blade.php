<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('public/css/animate.css')}}"> -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Epos app by tech camino
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('public/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('public/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">

  <div class="wrapper ">
  
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('public/assets/img/logo-small.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="{{url('/')}}" class="simple-text logo-normal">
          Tech Camino
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li  class="@if(Request::is('/')) active @endif">
            <a href="{{url('/')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="@if(Request::is('icons')) active @endif">
            <a href="{{url('icons')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Icons</p>
            </a>
          </li>
          
          <li class="@if(Request::is('notification')) active @endif">
            <a href="{{url('notification')}}">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="@if(Request::is('user')) active @endif">
            <a href="{{url('user')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="@if(Request::is('table')) active @endif">
            <a href="{{url('table')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li class="@if(Request::is('typography')) active @endif">
            <a href="{{url('typography')}}">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="{{url('/')}}">EPOS</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" 
                      style="cursor: pointer" 
                      data-toggle="modal" 
                      data-target="#loginModal">{{ __('Login') }}</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
        <section class="content">
            @yield('content')
        </section>
        @include('partials.login')
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="#" target="_blank">Tech Camino</a></li>
                <li><a href="#" target="_blank">Blog</a></li>
                <li><a href="#" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by tech camino
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('public/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('public/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <!-- Chart JS -->
  <script src="{{asset('public/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('public/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('public/assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('public/assets/demo/demo.js')}}"></script>
  
  @yield('scripts')
</body>

</html>
