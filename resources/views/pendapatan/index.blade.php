@extends('layouts.master')

@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">PENDAPATAN PEKERJA</h1>
      <br>
      @if(session ('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="row">
            <div class="col">
              <h6 class="m-0 font-weight-bold text-primary">Pendapatan Karyawan</h6>
            </div>
            <div class="col">
              <!-- <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah
              </button> -->
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>Gaji Per Hari</th>
                  <th>Total Hari Kerja</th>
                  <th>Total Pendapatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($karyawan as $index)

                <tr>

                  <td>{{$index->nama}}</td> 
                  <td>Rp {{$index->gaji}}</td> 
                  <td>{{$index->hari}} hari</td> 
                  <td>Rp {{$index->total_gaji}}</td> 
                  <td>
                    <!-- Button trigger modal -->
                    <a href="/karyawan/{{$index->id}}/edit" class="btn btn-success btn-sm"> Edit</a>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->
  </div>
</div>
<!-- End of Main Content -->
@stop