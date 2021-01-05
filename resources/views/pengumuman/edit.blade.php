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
                  <form method="POST" action="/pengumuman/{{$pengumuman->id}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->judul}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Pengumuman</label>
                        <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="4" required>{{$pengumuman->isi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar" required>
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