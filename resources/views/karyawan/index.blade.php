@extends('layouts.master')

@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">PEKERJA</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
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
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($karyawan as $index => $item)

                <tr>
                  <td><a href="/karyawan/{{$item->model_id}}/profil">{{DB::table('users')->where('id', $item->model_id)->value('nama')}}</a></td>
                  <td>{{DB::table('users')->where('id', $item->model_id)->value('jenis_kelamin')}}</td>
                  <td>{{DB::table('users')->where('id', $item->model_id)->value('email')}}</td>
                  <td>{{DB::table('users')->where('id', $item->model_id)->value('alamat')}}</td>
                  <td>
                    <!-- Button trigger modal -->
                    <a href="/karyawan/{{$item->model_id}}/edit" class="btn btn-success btn-sm"> Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalStatus">
                      Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="/karyawan/create" method="POST">
                              {{csrf_field()}}
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Gaji</label>
                                <input name="gaji" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Gaji" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
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
<div id="modalStatus" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus data karyawan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/karyawan/{{$item->model_id}}/delete" class="btn btn-primary">Ya, Saya yakin</a>
      </div>
    </div>
  </div>
</div>
@stop