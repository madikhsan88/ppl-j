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
      <h3 class="page-title">Data Pendapatan</h3>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel">
                <div class="panel-body">
                  <form action="{{url('/pendapatan/{{$pendapatan->id}}/update')}}" method="POST">
                    {{csrf_field()}}
                    {{--<div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->nama}}">
                    </div>--}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gaji Perhari</label>
                      <input name="gaji" type="text" class="form-control" aria-describedby="emailHelp" value="{{$pendapatan->gaji}}">
                    </div>
                   {{-- <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
                    </div>--}}
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