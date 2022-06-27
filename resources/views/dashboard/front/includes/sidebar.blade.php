<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ secure_url('/admin') }}" class="brand-link">
    <img style="float:center;width:200px;height:35px;" src="@if($appSettings){{ asset('frontend_assets/img/logo.png') }}@endif">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li
          class="nav-item {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'menu-open' : '' }}">
          <a href="{{ url('/user/my-songs') }}"
            class="nav-link {{ request()->is('user/my-songs') || request()->is('admin/roles-permissions') || request()->is('user/user/*') || request()->is('admin/role/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              My Downloads
              <i class=""></i>
            </p>
          </a>
        </li>
        
        </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>