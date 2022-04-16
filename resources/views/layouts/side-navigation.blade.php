<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #3252DF;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
        <div class="brand-icon">
            <i class="fas fa-campground fa-2x"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cari Pemain</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div> --}}

    <!-- Nav Item - Users -->
    <li class="nav-item @if(request()->routeIs('akun.*')) active @endif">
        <a class="nav-link" href="{{ route('akun.index') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>{{ __('Account') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('pelatih.index') }}">Pelatih</a>
            <a class="collapse-item" href="{{ route('asisten.index') }}">Asisten Pelatih</a>
            <a class="collapse-item" href="{{ route('pemain.index') }}">Pemain</a>
          </div>
        </div>
      </li>

    <!-- Nav Item - Transactions -->
    {{-- <li class="nav-item @if(request()->routeIs('transactions')) active @endif">
        <a class="nav-link" href="{{ route('transactions') }}">
            <i class="fas fa-fw fa-money-bill-alt"></i>
            <span>{{ __('Transactions') }}</span></a>
    </li> --}}

    <li class="nav-item @if(request()->routeIs('logout')) active @endif">
        <a class="nav-link" href="{{ route('home') }}" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>{{ __('Logout') }}</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->