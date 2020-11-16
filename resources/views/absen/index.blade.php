@extends('layouts.master')

@section('content')
<!-- <div class="main"> 
    <div class="panel panel-headline">
		<div class="panel-heading">
			<h3 class="panel-title">Weekly Overview</h3>
			<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="metric">
						<span class="icon"><i class="fa fa-download"></i></span>
						<p>
							<span class="number">1,252</span>
							<span class="title">Downloads</span>
						</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="metric">
						<span class="icon"><i class="fa fa-shopping-bag"></i></span>
						<p>
							<span class="number">203</span>
							<span class="title">Sales</span>
						</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="metric">
						<span class="icon"><i class="fa fa-eye"></i></span>
						<p>
							<span class="number">274,678</span>
							<span class="title">Visits</span>
						</p>
					</div>
				</div>
		
				<div class="col-md-12">

						<table class="table">
						<thead>
							<tr>
								<th>Hari</th>
								<th>Tanggal</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Senin</td>
								<td>11-11-2020</td>
								<td>Hadir</td>
								<td>
								<a href="#" class="btn btn-success btn-sm"> Hadir</a>
                                <a href="#" class="btn btn-danger btn-sm"> Tidak Hadir</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div> -->

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $info['status']}}</div>

                <div class="panel-body">
                    <table class="table table-responsive">
                        <form action="/absen" method="post">
                            {{csrf_field()}}
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="keterangan..." name="note">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="btnIn" {{$info['btnIn']}}>ABSEN MASUK</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="btnOut" {{$info['btnOut']}}>ABSEN KELUAR</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat Absensi</div>

                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data_absen as $absen)
                                <tr>
                                    <td>{{$absen->date}}</td>
                                    <td>{{$absen->time_in}}</td>
                                    <td>{{$absen->time_out}}</td>
                                    <td>{{$absen->note}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4"><b><i>TIDAK ADA DATA UNTUK DITAMPILKAN</i></b></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $data_absen->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop