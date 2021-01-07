<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="img/logo/logo2.png">
          </div>
      <div class="sidebar-brand-text mx-3">Restaurant Management System</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('backend.dashboard.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>





    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>

    <li class="nav-item">



        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category Setup</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                    <a class="dropdown-item" href="{{ route('backend.category.create') }}">Create</a>
                    <a class="collapse-item" href="{{ route('backend.category.list') }}">List</a>

            </div>
        </div>

</li>

<li class="nav-item">

        <a class="nav-link collapsed" href="{{ route('backend.category.create') }}" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Item</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


                <a class="dropdown-item" href="{{ route('backend.item.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('backend.item.list') }}">List</a>

        </div>
    </div>

</li>


<li class="nav-item">

    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseFour"
    aria-expanded="true" aria-controls="collapseFour">
    <i class="fas fa-fw fa-cog"></i>
    <span>Employee</span>
</a>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">


            <a class="dropdown-item" href="{{ route('backend.employee.create') }}">Create</a>
            <a class="collapse-item" href="{{ route('backend.employee.list') }}">List</a>

    </div>
</div>

</li>

<li class="nav-item">

    <a class="nav-link collapsed" href="{{ route('backend.order.list') }}" data-toggle="collapse" data-target="#collapseSix"
    aria-expanded="true" aria-controls="collapseSix">
    <i class="fas fa-fw fa-cog"></i>
    <span>Order</span>
</a>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">



        <a class="collapse-item" href="{{ route('backend.order.list') }}">List</a>

</div>
</div>

</li>


<li class="nav-item">

    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse10"
    aria-expanded="true" aria-controls="collapse10">
    <i class="fas fa-fw fa-cog"></i>
    <span>Registration</span>
</a>
<div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">



            <a class="collapse-item" href="{{ route('backend.registration.list') }}">List</a>

    </div>
</div>

</li>

<li class="nav-item">

    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseEight"
    aria-expanded="true" aria-controls="collapseEight">
    <i class="fas fa-fw fa-cog"></i>
    <span>Delivery Man</span>
</a>
<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">


            <a class="dropdown-item" href="{{ route('backend.delivery.create') }}">Create</a>
            <a class="collapse-item" href="{{ route('backend.delivery.list') }}">List</a>

    </div>
</div>

</li>
<li class="nav-item">

    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseNine"
    aria-expanded="true" aria-controls="collapseNine">
    <i class="fas fa-fw fa-cog"></i>
    <span>Buisness Setting</span>
</a>
<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">


            <a class="dropdown-item" href="">Create</a>
            <a class="collapse-item" href="">List</a>

    </div>
</div>

</li>

<li class="nav-item">

    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse2"
    aria-expanded="true" aria-controls="collapse2">
    <i class="fas fa-fw fa-cog"></i>
    <span>Coupon</span>
</a>
<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">


            <a class="dropdown-item" href="">Create</a>
            <a class="collapse-item" href="">List</a>

    </div>
</div>

</li>



<hr class="sidebar-divider">
  <div class="sidebar-heading">
    LogOut Option
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
      aria-controls="collapsePage">


    </a>
    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">

    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Logout</span>
    </a>
  </li>
  <hr class="sidebar-divider">

  </ul>

















