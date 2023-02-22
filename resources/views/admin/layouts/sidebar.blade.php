<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Premio's Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->is('dashboard/home*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/home') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Page Home</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/audio*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/audio') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Page Car Audio</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/auto*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/auto') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Page Auto Detailing</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/gallery*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/gallery') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Gallery</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/profile*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/profile') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Profile</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('dashboard/footer*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/footer') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Footer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>