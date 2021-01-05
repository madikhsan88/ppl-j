@extends('layouts.master')

@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
<<<<<<< HEAD
      <h1 class="h3 mb-2 text-gray-800">Pendapatan Pekerja</h1>
=======
      <h1 class="h3 mb-2 text-gray-800">PENDAPATAN PEKERJA</h1>
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
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
<<<<<<< HEAD
                  @if(Auth::user()->hasAnyRole('manager'))
                  <th>Aksi</th>
                  @endif
=======
                  <th>Aksi</th>
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
                </tr>
              </thead>
              <tbody>
                @foreach ($karyawan as $index)
<<<<<<< HEAD
                <tr>
=======

                <tr>

>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
                  <td>{{$index->nama}}</td> 
                  <td>Rp {{$index->gaji}}</td> 
                  <td>{{$index->hari}} hari</td> 
                  <td>Rp {{$index->total_gaji}}</td> 
<<<<<<< HEAD
                  @if(Auth::user()->hasAnyRole('manager'))
                  <td>
                    <!-- Button trigger modal -->
                    <a href="/pendapatan/{{$index->id}}/edit" class="btn btn-success btn-sm"> Edit</a>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalStatus" onclick=passingId({{$index->id}})>
                      Gajian
                    </a>
                  </td>
                  @endif
=======
                  <td>
                    <!-- Button trigger modal -->
                    <a href="/karyawan/{{$index->id}}/edit" class="btn btn-success btn-sm"> Edit</a>

                  </td>
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
<<<<<<< HEAD
=======

>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
    </div>
    <!-- /.container-fluid -->
  </div>
</div>
<!-- End of Main Content -->
<<<<<<< HEAD
<div id="modalStatus" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pembayaran Pendapatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin pendapatan telah dibayar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="" class="btn btn-primary" id="gaji">Ya, Saya yakin</a>
      </div>
    </div>
  </div>
</div>
@stop
@stack('script')
<script>
  function passingId(id) {
    $('#gaji').prop('href', '/gaji/'+id+'/delete');
  }
</script>
=======
@stop
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
