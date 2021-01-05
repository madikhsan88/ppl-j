@extends('layouts.master')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<!-- Content Row -->
	@if(Auth::user()->hasAnyRole('karyawan'))

	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								<a href="/absen">Absensi</a>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalHari}} hari</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Total Pendapatan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{$totalGaji}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	<div class="row">
		<!-- Area Chart -->
		<div class="col-xl-6 col-lg-5">
			<!-- Card Header - Dropdown -->
			<div class="card shadow mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Absensi</h6>
					<div class="panel-heading m-0 font-weight-bold">{{ $info['status']}}</div>
				</div>
				<div class="container">
					<table class="table table-responsive">
						<form action="/absen" method="post">
							{{csrf_field()}}
							<tr>
								<td class="col-5">
									<input type="text" class="form-control" placeholder="keterangan kerja dan lokasi" name="catatan">
								</td>
								<td>
									<button type="submit" class="btn btn-flat btn-primary " name="submit" {{$info['btnIn']}} value="btnIn">MASUK</button>
								</td>
								<td>
									<button type="submit" class="btn btn-flat btn-primary" name="submit" value="btnOut" {{$info['btnOut']}}>KELUAR</button>
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>
		</div>

		<!-- Pie Chart -->
		<div class="col-xl-6 col-lg-5">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Jadwal Harian</h6>
					<h6 class="m-0 font-weight-bold text-secondary">
						{{strtoupper($data_jadwal_harian->hari)}}
						{{date('d F Y')}}
					</h6>
				</div>
				<div class="card-body">
					{{strtoupper($data_jadwal_harian->keterangan_kerja)}}
					{{strtoupper($data_jadwal_harian->lokasi)}}
					<a class="float-right" href="/jadwal">Semua Jadwal</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		@foreach ($pengumuman as $item)
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card">
				<div class="card-body">
					<div class="article-header">
						<div class="post-thumbnail">
							<a href="#">
								<img width="100%" src="{{asset('storage/'. $item->gambar)}}">
							</a>
						</div>
					</div>
					<div class="article-details">
						<div class="article-category mt-3">
							<h6>By {{\DB::table('users')->where('id', $item->user_id)->value('nama')}} {{date('d-m-Y', strtotime($item->updated_at))}}</h6>
						</div>
						<div class="article-title">
							<h4><a href="#">{{$item->judul}}</a></h4>
						</div>
						<p>{{$item->isi}} </p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif


	@if(Auth::user()->hasAnyRole('manager'))
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								<a href="/laporan">Total Hasil Panen</a>
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp 200,000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Total Pengeluaran</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp 215.000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		@foreach ($pengumuman as $item)
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card">
				<div class="card-body">
					<div class="article-header">
						<div class="post-thumbnail">
							<a href="#">
								<img width="100%" src="{{asset('storage/'. $item->gambar)}}">
							</a>
						</div>
					</div>
					<div class="article-details">
						<div class="article-category mt-3">
							<h6>By {{\DB::table('users')->where('id', $item->user_id)->value('nama')}} {{date('d-m-Y', strtotime($item->updated_at))}}</h6>
						</div>
						<div class="article-title">
							<h4><a href="#">{{$item->judul}}</a></h4>
						</div>
						<p>{{$item->isi}} </p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif
</div>
@stop