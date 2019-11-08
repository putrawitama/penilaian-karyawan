<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-3">BANK BTN HR</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('employee') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>Employee</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('grade') }}">
          <i class="fas fa-fw fa-sitemap"></i>
          <span>Grade</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('position') }}">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Position</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('question') }}">
          <i class="fas fa-fw fa-question"></i>
          <span>Question</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
<!-- End of Sidebar -->