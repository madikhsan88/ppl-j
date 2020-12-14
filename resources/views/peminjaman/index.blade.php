@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Peminjaman</h1>

    @if(session ('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        <a href="/peminjaman/{{session('lastId')}}/delete" class="text-danger float-right">Batalkan</a>
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Total Pendapatan</th>
                            <th>Total Peminjaman</th>
                            @if(Auth::user()->hasAnyRole('manager'))
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $index => $item)
                        <tr>
                            <td><a href="/karyawan/{{$item->model_id}}/profil">{{DB::table('users')->where('id', $item->model_id)->value('nama')}}</a></td>
                            <td>20000</td>
                            <td>30000</td>
                            @if(Auth::user()->hasAnyRole('manager'))
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" onclick="ajukan(this)" data-target="#exampleModal" id="{{DB::table('users')->where('id', $item->model_id)->value('id')}}">
                                    <i class="fa fa-plus"></i> Ajukan
                                </button>
                                <a href="/peminjaman/detail" class="btn btn-success btn-sm"> Detail</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajukan Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/peminjaman/create" method="POST" id="formPengajuan">
                    {{csrf_field()}}
                    <input type="hidden" value="ini user id" name="user_id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nominal Peminjaman</label>
                        <input name="nominal" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ajukan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stack('scripts')
<script>
    function ajukan(elem) {
        var $_this = $(elem);
        var user_id = $_this.prop('id');
        $('#formPengajuan').find('input[name=user_id]').val(user_id);
    }
</script>
@endsection