
@if (Auth::user()->hasAnyRole('manager','pengawas'))
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-tree" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI PERKASA <sup></sup></div>
    </a>
	
	<!-- Divider -->
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
    <li class="nav-item">
        <a class="nav-link" href="/verife">
            <i class="fa fa-university" aria-hidden="true"></i>
            <span>Kehadiran</span></a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
@endif