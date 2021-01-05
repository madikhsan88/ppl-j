<<<<<<< HEAD
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->

=======

@if (Auth::user()->hasAnyRole('manager','pengawas'))
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-tree" aria-hidden="true"></i>
        </div>
<<<<<<< HEAD
        <div class="sidebar-brand-text mx-3">SI TOBACOO <sup></sup></div>
    </a>

    <!-- Divider -->
=======
        <div class="sidebar-brand-text mx-3">SI PERKASA <sup></sup></div>
    </a>
	
	<!-- Divider -->
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fa fa-tachometer-alt mr-1"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/pendapatan">
            <i class="fa fa-credit-card mr-1" aria-hidden="true"></i>
            <span>Pendapatan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/jadwal">
            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
            <span>Jadwal</span></a>
    </li>
<<<<<<< HEAD

    <!-- Nav Item - Pages Collapse Menu -->
    @if (Auth::user()->hasAnyRole('manager'))
    <li class="nav-item">
        <a class="nav-link" href="/karyawan">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Karyawan</span></a>
    </li>
=======
    <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
            <span>Kehadiran</span></a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" href="/peminjaman">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Peminjaman</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
	@if (Auth::user()->hasAnyRole('manager'))
	<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Pekerja</span>
		</a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pekerja:</h6>
                <a class="collapse-item" href="/karyawan">Karyawan</a>
                <a class="collapse-item" href="/pengawas">Pengawas</a>
            </div>
		</div>
	</li>
	@endif
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
    <li class="nav-item">
        <a class="nav-link" href="/verife">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Kehadiran</span></a>
    </li>
<<<<<<< HEAD
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pengumuman') }}">
            <i class="fa fa-info" aria-hidden="true"></i>
            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/laporan">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Laporan</span></a>
    </li>
    @endif
    @if (Auth::user()->hasAnyRole('karyawan'))
    <li class="nav-item">
        <a class="nav-link" href="/absensi">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Absensi</span></a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    @endif
</ul>
=======
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
@endif
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
