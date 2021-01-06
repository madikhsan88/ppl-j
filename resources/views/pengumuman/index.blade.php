@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengumuman</h6>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($pengumuman as $item)
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card-body">
                            <div class="article-header">
                                <div class="post-thumbnail">
                                    <a href="#">
                                        <img width="100%" src="{{asset('storage/'. $item->gambar)}}">
                                    </a>
                                </div>
                            </div>
                            <div class="article-details">
                                <div class="article-category mt-3">
                                    <h6>By {{\DB::table('users')->where('id', $item->user_id)->value('nama')}} {{date('d-m-Y', strtotime($item->updated_at))}}</h6>
                                </div>
                                <div class="article-title">
                                    <h4><a href="#">{{$item->judul}}</a></h4>
                                </div>
                                <p>{{$item->isi}} </p>
                                <div class="article-cta mt-3">
                                    <a href="{{url('/pengumuman/'.$item->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" method="POST" action="{{url('/pengumuman/'.$item->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit">hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!-- /.container-fluid -->
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('pengumuman.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Pengumuman</label>
                        <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
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
<!-- End of Main Content -->
@stop