<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="{{url('home')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('public/assets/img/logo-small.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="{{url('home')}}" class="simple-text logo-normal">
          Tech Camino
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li  class="@if(Request::is('home')) active @endif">
            <a href="{{url('home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="@if(Request::is('products') || Request::is('addProduct')) active @endif">
            <a href="{{url('products')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Products</p>
            </a>
          </li>
          
          <li class="@if(Request::is('notification')) active @endif">
            <a href="{{url('notification')}}">
              <i class="nc-icon nc-bell-55"></i>
              <p>Stocks</p>
            </a>
          </li>
          <li class="@if(Request::is('customers') || Request::is('addCustomer'))  active @endif">
            <a href="{{url('customers')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Customers</p>
            </a>
          </li>
          <li class="@if(Request::is('table')) active @endif">
            <a href="{{url('table')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="@if(Request::is('typography')) active @endif">
            <a href="{{url('typography')}}">
              <i class="nc-icon nc-caps-small"></i>
              <p>Report</p>
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