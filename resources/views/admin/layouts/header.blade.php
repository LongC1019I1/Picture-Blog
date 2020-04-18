<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BitFumes</b> Blog</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <div class="dropdown user user-menu" style="margin-top: 15px">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu" style="margin-top: 45px; margin-left: -250px">
              <!-- User image -->
              <li class="user-header">

                <img src="{{asset('storage/images/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">


                <p>
                   - Web Developer
                  <small>{{\Illuminate\Support\Facades\Auth::user()->name}} </small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="btn btn-default pull-right">
                      <a href="{{route('logout')}}">
                          Logout
                      </a>

                      <form id="logout-form" action="" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                </div>
              </li>
            </ul>
          </div>
        </ul>
      </div>
    </nav>
  </header>
