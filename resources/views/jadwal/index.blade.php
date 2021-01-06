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
      <h1 class="h3 mb-2 text-gray-800">Jadwal Kerja</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tabel Jadwal Kerja</h6>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Hari</th>
                      <th>Keterangan Kerja</th>
                      <th>Lokasi</th>
                      @if (Auth::user()->hasAnyRole('manager'))
                      <th>Aksi</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_jadwal as $jadwal)
                    <tr>
                      <td>{{$jadwal->hari}}</td>
                      <td>{{$jadwal->keterangan_kerja}}</td>
                      <td>{{$jadwal->lokasi}}</td>
                      @if (Auth::user()->hasAnyRole('manager'))
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" onclick="editJadwal({{$jadwal->id}})" data-target="#exampleModal">
                          Edit
                        </button>
                      </td>
                    </tr>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{url('/jadwal/'.$jadwal->id)}}">
                              @method('PUT')
                              @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan Kerja</label>
                                <input name="keterangan_kerja" type="text" class="form-control" id="keterangan_kerja" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Lokasi Kerja</label>
                                <input name="lokasi" type="text" class="form-control" id="lokasi">
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @stop
  @section('script')

  <script>
    function editJadwal(id) {
      var action = "{{url('jadwal/edit')}}" + "/" + id;
      jQuery.ajax({
        url: "{{url('getJadwal')}}" + "/" + id,
        type: "GET",
        dataType: "json",
        success: function(data) {
          $("#keterangan_kerja").val(data.keterangan_kerja);
          $("#lokasi").val(data.lokasi);
          $("#updateJadwal").attr('action', action);
        }
      })
    }

    // $(document)
    $('#updateJadwal').on('submit', function(e) {
      // $('button').on('click', function() {
      var result = $("#updateJadwal input").filter(function() {
        return $.trim($(this).val()).length == 0
      }).length == 0;

      if (result == false) {
        alert('Form data penjadwalan kerja tidak boleh kosong');
        e.preventDefault();
      }
    });
  </script>

  @stop