  <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
      <div class="text-center">

        <a href="{{ url('administrator/dashboard') }}" class="logo"><img
            src="{{ asset('assets/images/logo_dark.png') }}" height="20" alt="logo"></a>
      </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

      <div id="sidebar-menu">
        <ul>
          <li class="mt-1">
            <a href="{{ url('administrator/dashboard') }}" class="waves-effect">
              <i class="dripicons-home"></i>
              <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
            </a>
          </li>
          <li class="menu-title">Main</li>


          <li class="menu-title">Setting</li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-medical"></i><span> Account </span>
              <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
              @if (auth()->user()->can('user_list'))
                <li><a href="{{ url('administrator/users') }}">Users</a></li>
              @endif
              @if (auth()->user()->can('permission_list'))
                <li><a href="{{ url('administrator/permissions') }}">Permissions</a></li>
              @endif
              @if (auth()->user()->can('roles_list'))
                <li><a href="{{ url('administrator/roles') }}">User Groups / Roles</a></li>
              @endif

            </ul>
          </li>

        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
  </div>
