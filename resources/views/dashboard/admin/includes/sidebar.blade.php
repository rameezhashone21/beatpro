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
          <a href="{{ url('/admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        @permission('view.users')
        <li
          class="nav-item {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'menu-open' : '' }}">
          <a href="#"
            class="nav-link {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/users') }}"
                class="nav-link {{ request()->is('admin/users') || request()->is('admin/user/*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/roles-permissions') }}"
                class="nav-link {{ request()->is('admin/roles-permissions') || request()->is('admin/role/*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Roles & Permissions</p>
              </a>
            </li>
          </ul>
        </li>
        @endpermission

        @permission('view.users')
        <li
          class="nav-item {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'menu-open' : '' }}">
          <a href="#"
            class="nav-link {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Beats
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/categories') }}"
                class="nav-link {{ request()->is('admin/categories') || request()->is('admin/category/*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/albums') }}"
                class="nav-link {{ request()->is('admin/albums') || request()->is('admin/album/*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Albums</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/songs') }}"
                class="nav-link {{ request()->is('admin/songs') || request()->is('admin/song/*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Beats</p>
              </a>
            </li>
          </ul>
        </li>
        @endpermission

        @permission('view.users')
        <li
          class="nav-item {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/services') }}"
            class="nav-link {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Services
              <i class=""></i>
            </p>
          </a>
        </li>
        @endpermission

        @permission('view.my-songs')
        <li
          class="nav-item {{ request()->is('admin/users') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'menu-open' : '' }}">
          <a href="{{ url('/admin/my-songs') }}"
            class="nav-link {{ request()->is('admin/my-songs') || request()->is('admin/roles-permissions') || request()->is('admin/user/*') || request()->is('admin/role/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              My Songs
              <i class=""></i>
            </p>
          </a>
        </li>
        @endpermission

        

        @permission('view.pages')
        <li class="nav-header">Site Data</li>
        <li class="nav-item">
          <a href="{{ secure_url('/admin/pages') }}"
            class="nav-link {{ request()->is('admin/pages') || request()->is('admin/page/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Site Pages
            </p>
          </a>
        </li>
        @endpermission


        @permission('view.blog.category')
        <li class="nav-item">
          <a href="{{ route('blog.category.view') }}"
            class="nav-link {{ request()->is('admin/blog/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Blogs
            </p>
          </a>
        </li>
        @endpermission

        <li class="nav-header">Settings</li>
        <li
          class="nav-item {{ request()->is('admin/web-setting/*') || request()->is('admin/app-setting/*') ? 'menu-open' : ''}}">
          <a href="#"
            class="nav-link {{ request()->is('admin/web-setting/*') || request()->is('admin/app-setting/*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @permission('update.web.settings')
            <li class="nav-item">
              <a href="{{ secure_url('/admin/web-setting/edit/1') }}"
                class="nav-link {{ request()->is('admin/web-setting/*') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Web Settings</p>
              </a>
            </li>
            @endpermission

            @permission('update.app.settings')
            <li class="nav-item">
              <a href="{{ secure_url('/admin/app-setting/edit/1') }}"
                class="nav-link {{ request()->is('admin/app-setting/*') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>App Settings</p>
              </a>
            </li>
            @endpermission
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>