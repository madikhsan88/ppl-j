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
					<div class="row">
						<div class="col-md-12">
              <div class="panel">
				  	    <div class="panel-heading">
				  			  <h3 class="panel-title">Data Karyawan</h3>
                  <div class="right">
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                  </div>
		    		    </div>
			    		    <div class="panel-body">
  			    			  <table class="table table-hover">
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
                        @foreach ($data_karyawan as $karyawan)
                        <tr>
                            <td><a href="/karyawan/{{$karyawan->id}}/profil">{{$karyawan->nama_lengkap}}</a></td>
                            <td>{{$karyawan->jenis_kelamin}}</td>
                            <td>{{$karyawan->email}}</td>
                            <td>{{$karyawan->alamat}}</td>
                            <td>
                                  <!-- Button trigger modal -->
                                <a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-primary btn-sm"> Edit</a>
                                <a href="/karyawan/{{$karyawan->id}}/delete" class="btn btn-danger btn-sm"> Delete</a>
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
                                            <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
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
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        </div>
      </div>
    </div>
@stop