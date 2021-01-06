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
      <h3 class="page-title">Laporan Hasil Panen</h3>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel">
                <div class="panel-body">
                  <form action="{{url('/laporan/'.$laporan->id.'/update')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Lokasi</label>
                      <input name="keterangan" type="text" class="form-control" value="{{$laporan->keterangan}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInput">Jumlah Panen</label>
                      <input name="panen" type="text" class="form-control" value="{{$laporan->panen}}" required>
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