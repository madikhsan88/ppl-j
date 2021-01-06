<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-tree" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI TOBACOO <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fa fa-tachometer-alt mr-1"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/jadwal')}}">
            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
            <span>Jadwal</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (Auth::user()->hasAnyRole('manager'))
    <li class="nav-item">
        <a class="nav-link" href="{{url('/pendapatan')}}">
            <i class="fa fa-credit-card mr-1" aria-hidden="true"></i>
            <span>Pendapatan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/karyawan') }}">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Karyawan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/verife')}}">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Kehadiran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pengumuman') }}">
            <i class="fa fa-info" aria-hidden="true"></i>
            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/laporan')}}">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Laporan</span></a>
    </li>
    @endif
    @if (Auth::user()->hasAnyRole('karyawan'))
    <li class="nav-item">
        <a class="nav-link" href="{{url('/absensi')}}">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Absensi</span></a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    @endif
</ul>