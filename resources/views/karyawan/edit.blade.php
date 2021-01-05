@extends('layouts.master')

@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      @if(session ('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif
      <h3 class="page-title">Data Karyawan</h3>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel">
                <div class="panel-body">
                  <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->nama}}">
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
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->email}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>

                  </form>
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