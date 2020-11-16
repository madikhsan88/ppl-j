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
					  <h3 class="page-title">JADWAL KERJA</h3>
					  <div class="row">
					  	<div class="col-md-12">
                <div class="panel">
				      		<div class="panel-heading">
				      			<h3 class="panel-title">Jadwal Kerja</h3>
				      		</div>
				      		  <div class="panel-body">
				      			  <table class="table table-hover">
				      			  	<thead>
					  					    <tr>
                            <th>Hari</th>
                            <th>Keterangan Kerja</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
				      					  </tr>
				      				  </thead>
				      				  <tbody>
                          @foreach ($data_jadwal as $jadwal)
                          <tr>
                              <td>{{$jadwal->hari}}</td>
                              <td>{{$jadwal->keterangan_kerja}}</td>
                              <td>{{$jadwal->lokasi}}</td>
                              <td>
                                <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                      Edit
                                  </button>

                                  <!-- Modal -->
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
                                          <form action="/jadwal/{{$jadwal->id}}/edit" method="POST">
                                              {{csrf_field()}}
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Keterangan Kerja</label>
                                                  <input name="keterangan_kerja" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jadwal->keterangan_kerja}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Lokasi Kerja</label>
                                                  <input name="lokasi" type="text" class="form-control" id="exampleInputPassword1" value="{{$jadwal->lokasi}}">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
        </div>
      </div>
    </div>
@stop