@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h1 class="h3 mb-1 text-gray-800">ABSENSI KERJA</h1>
            <br>
            <div class="card shadow mb-4">
                <div class="container">
<<<<<<< HEAD
                    <br>
=======
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
                    <div class="row">
                        <div class="col">
                            <div class="panel panel-default">
                                <br>
                                <div class="panel-heading">{{ $info['status']}}</div>

                                <div class="panel-body">
                                    <table class="table table-responsive">
                                        <form action="/absen" method="post">
                                            {{csrf_field()}}
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="keterangan..." name="catatan">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-flat btn-primary" name="submit" {{$info['btnIn']}} value="btnIn">ABSEN MASUK</button>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-flat btn-primary" name="submit" value="btnOut" {{$info['btnOut']}}>ABSEN KELUAR</button>
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
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Keluar</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data_absen as $absen)
                                            <tr>
                                                <td>{{$absen->date}}</td>
                                                <td>{{$absen->time_in}}</td>
                                                <td>{{$absen->time_out}}</td>
                                                <td>{{$absen->catatan}}</td>
                                                <td>{{$absen->status}}</td>

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
            </div>
        </div>
    </div>
</div>
@stop