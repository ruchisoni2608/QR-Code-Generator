<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    @php $route = \Request::route()->getName(); @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline d-none">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{ ( $route == 'admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard <span class="right badge badge-danger d-none">New</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.categories')}}" class="nav-link {{ ( $route == 'admin.categories') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-th"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.contacts')}}" class="nav-link {{ ( $route == 'admin.contacts') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-phone"></i>
                        <p>Inquiry</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.config_options')}}" class="nav-link {{ ( $route == 'admin.config_options') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.blogs')}}" class="nav-link {{ ( $route == 'admin.blogs') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-th"></i>
                        <p>Blog</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
