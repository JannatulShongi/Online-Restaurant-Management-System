<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
          aria-labelledby="searchDropdown">


        </div>
      </li>







      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item dropdown no-arrow">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Logout</span>
            </a>
          </li>

{{-- 
        <a class="nav-link dropdown-toggle" href="{{ route('logout') }}" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">

        <span class="ml-2 d-none d-lg-inline text-white small">Logout</span>
      </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">





          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div> --}}
      </li>
    </ul>
  </nav>
