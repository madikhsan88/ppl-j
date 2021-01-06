@extends('layouts.master')

@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Laporan Hasil Panen</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Hasil Panen</h6>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah
              </button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  @if(Auth::user()->hasAnyRole('manager'))
                  <th>Nama</th>
                  @endif
                  <th>Lokasi</th>
                  <th>Jumlah Panen</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($laporan as $item)

                <tr>
                  <td>{{date('d-m-Y', strtotime($item->updated_at))}}</td>
                  @if(Auth::user()->hasAnyRole('manager'))
                  <td>{{\DB::table('users')->where('id', $item->user_id)->value('nama')}}</td>
                  @endif
                  <td>{{$item->keterangan}}</td>
                  <td>{{$item->panen}} Kg</td>
                  <td>
                    <!-- Button trigger modal -->
                    <a href="{{url('/laporan/'.$item->id.'/edit')}}" class="btn btn-success btn-sm"> Edit</a>
                    <!-- Modal -->
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('/laporan/create')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Lokasi</label>
            <input name="keterangan" type="text" class="form-control" placeholder="Lokasi" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Panen</label>
            <input name="panen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Panen" required>
          </div>
          <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@stop