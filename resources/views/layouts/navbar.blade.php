<<<<<<< HEAD

=======
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>
<<<<<<< HEAD
=======
	@if (Auth::user()->hasAnyRole('karyawan'))
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard#">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fa fa-tree" aria-hidden="true"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SI PERKASA <sup></sup></div>
	</a>
	
	<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
		</ul>
	</div> -->
	@endif

>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
	<!-- Topbar Search -->
	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
			<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>

		<!-- Nav Item - Alerts -->

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->nama}}</span>
				<img class="img-profile rounded-circle" src="img/undraw_profile.svg">
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="/profile">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					Profile
				</a>

<<<<<<< HEAD
				<a class="dropdown-item" href="/password">
=======
				<a class="dropdown-item" href="#">
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
					<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
					Change Password
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</li>
<<<<<<< HEAD
	</ul>
=======

	</ul>

>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
</nav>