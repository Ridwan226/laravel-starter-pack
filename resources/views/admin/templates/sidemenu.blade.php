<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header nav-small-cap">PERSONAL</li>

      <li>
        <a href="{{ url('administrator/dashboard') }}">
          <i class="ti-dashboard"></i>
          <span>Dashboard</span>

        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="ti-shield"></i>
          <span>Authentication</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if (auth()->user()->can('user_list'))
          <li><a href="{{ url('administrator/users') }}"><i class="ti-more"></i>Users</a></li>
          @endif
          @if (auth()->user()->can('permission_list'))
          <li><a href="{{ url('administrator/permissions') }}"><i class="ti-more"></i>Permissions</a></li>

          @endif
          @if (auth()->user()->can('roles_list'))
          <li><a href="{{ url('administrator/roles') }}"><i class="ti-more"></i>User Groups / Roles</a></li>

          @endif
        </ul>
      </li>


      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
          <i class="ti-power-off"></i>
          <span>{{ __('Logout') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>

    </ul>
  </section>
</aside>