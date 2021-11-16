<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('administrator/dashboard') }}" class="logo">
    <!-- mini logo -->
    <div class="logo-mini">
      <span class="light-logo"><img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="logo"></span>
      <span class="dark-logo"><img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="logo"></span>
    </div>
    <!-- logo-->
    <div class="logo-lg">
      <span class="light-logo"><img src="{{ asset('assets/admin/images/logo-light-text.png') }}" alt="logo"></span>
      <span class="dark-logo"><img src="{{ asset('assets/admin/images/logo-dark-text.png') }}" alt="logo"></span>
    </div>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">

    <div class="app-menu">
      <ul class="header-megamenu nav">
        <li class="btn-group nav-item">
          <a href="#" class="nav-link rounded" data-toggle="push-menu" role="button">
            <i class="nav-link-icon mdi mdi-menu text-white"></i>
          </a>
        </li>

      </ul>
    </div>

    <div class="navbar-custom-menu r-side">
      <ul class="nav navbar-nav">
        <!-- full Screen -->
        <li class="search-bar d-sm-inline-flex d-none">
          <div class="lookup lookup-circle lookup-right">
            <input type="text" name="s">
          </div>
        </li>

        <!-- Notifications -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications">
            <i class="mdi mdi-bell"></i>
          </a>
          <ul class="dropdown-menu animated bounceIn">

            <li class="header">
              <div class="p-20">
                <div class="flexbox">
                  <div>
                    <h4 class="mb-0 mt-0">Notifications</h4>
                  </div>
                  <div>
                    <a href="#" class="text-danger">Clear All</a>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu sm-scrol">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam
                    posuere.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a
                    erat.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum
                    imperdiet.
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all</a>
            </li>
          </ul>
        </li>

        <!-- User Account-->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
            <img src="{{ asset('assets/admin/images/avatar/7.jpg') }}" class="user-image rounded-circle"
              alt="User Image">
          </a>
          <ul class="dropdown-menu animated flipInX">
            <!-- User image -->
            <li class="user-header bg-img" style="background-image: url(/assets/admin/images/user-info.jpg)"
              data-overlay="3">
              <div class="flexbox align-self-center">
                <img src="{{ asset('assets/admin/images/avatar/7.jpg') }}" class="float-left rounded-circle"
                  alt="User Image">
                <h4 class="user-name align-self-center">
                  <span>{{ auth()->user()->name }}</span>
                  <small>{{ auth()->user()->email }}</small>
                </h4>
              </div>
            </li>

            <!-- Menu Body -->
            <li class="user-body">
              <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i
                  class="ion-log-out"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              <div class="dropdown-divider"></div>
              <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a>
              </div>
            </li>
          </ul>
        </li>


        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
        </li>

      </ul>
    </div>
  </nav>
</header>