@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Verifikasi Absensi</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Absensi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Absen Masuk</th>
                            <th>Absen Keluar</th>
                            <th>Catatan</th>
                            <th>Status</th>
                            @if(Auth::user()->hasAnyRole('manager'))
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_absen as $absen)
                        <tr>
                            <td>{{DB::table('users')->where('id', $absen->user_id)->value('nama')}}</td>
                            <td>{{$absen->date}}</td>
                            <td>{{$absen->time_in}}</td>
                            <td>{{$absen->time_out}}</td>
                            <td>{{$absen->catatan}}</td>
                            <td>{{$absen->status}}</td>
                            @if(Auth::user()->hasAnyRole('manager'))
                            <td>
                                @if ($absen->status == 'diterima')
                                <a href="{{url('StatusAbsenDitolak', $absen->id)}}">
                                    <button type="button" class="btn btn-danger">
                                        Tolak
                                    </button>
                                </a>
                                @endif
                                @if ($absen->status == 'ditolak')
                                <a href="{{url('StatusAbsenDiterima', $absen->id)}}">
                                    <button type="button" class="btn btn-success">
                                        Terima
                                    </button>
                                </a>
                                @endif
                                @if ($absen->status == 'belum diterima')
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTerima" data-id="{{$absen->id}}">
                                    Terima
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalStatus" data-id="{{$absen->id}}">
                                        Tolak
                                    </button>
                                    @endif
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
<div id="modalStatus" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verifikasi Absen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menolak verifikasi</p>
                <p>{{url('StatusAbsenDitolak', $absen->id)}}</p>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{url('StatusAbsenDitolak', $absen->id)}}" class="btn btn-primary">Ya, Saya yakin</a>
            </div>
        </div>
    </div>
</div>

<div id="modalTerima" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verifikasi Absen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menerima verifikasi</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{url('StatusAbsenDiterima', $absen->id)}}" class="btn btn-primary">Ya, Saya yakin</a>
            </div>
        </div>
    </div>
</div>
@stop
@push('script')
<script src="{{ asset('admin/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endpush