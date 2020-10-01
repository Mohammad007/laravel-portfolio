
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard') }}">
      <div class="sidebar-brand-icon rotate-n-15">
       
      </div>
    <div class="sidebar-brand-text mx-3">
        <img class="img-profile" src="{{asset('images') }}/{{ $setting['0']->logo }}" width="100px" height="40px">
       </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/admin/dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin/setting') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Setting</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/profile') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Profile</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/category') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Category</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/portfolio') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Portfolio</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/about') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>About</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/work') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Work</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/education') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Education</span></a>
    </li>


    <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/project') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Projects</span></a>
    </li>



    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/seo') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>SEO</span></a>
    </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="{{ url('admin/user') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>User</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>