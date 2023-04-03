<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">C Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Postingan -->
    <li class="nav-item {{ request()->is('admin/postingan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/postingan">
    <i class="fas fa-fw fa-folder"></i>
            <span>Semua Postingan</span></a>
    </li>
    
    <!-- Nav Item - Arsip -->
    <li class="nav-item {{ request()->is('admin/arsip') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/arsip">
            <i class="fas fa-fw fa-table"></i>
            <span>Arsip</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/akun') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/akun">
            <i class="fa fa-fw fa-user" aria-hidden="true"></i>
            <span>Kelola Akun</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/project') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/project">
            <i class="fa fa-fw fa-file" aria-hidden="true"></i>
            <span>Project</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/overview') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/overview">
            <i class="fa fa-fw fa-comment" aria-hidden="true"></i>
            <span>Overview</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/faq') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/faq">
            <i class="fa fa-fw fa-question-circle" aria-hidden="true"></i>
            <span>F.A.Q</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/logout') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Log out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>