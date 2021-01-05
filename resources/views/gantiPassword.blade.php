@extends('layouts.master')

@section('content')


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Change Your Password?</h1>
                                </div>
                                @if (session('alert'))
                                <div class="alert alert-danger">
                                    {{session('alert')}}
                                </div>
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                                @endif
                                <br>
                                <form action="{{url('ganti-password')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan password lama..." value="{{old('password')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_baru" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan password baru..." value="{{old('password_baru')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_konfirmasi" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan konfirmasi password baru..." value="{{old('password_konfirmasi')}}">
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-user btn-block">Simpan</button>
                                </form>
                                <br>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
{{--<div class="modal fade" id="lupa_password_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('ganti-password')}}" method="POST">
@csrf
<div class="form-group">
    <label for="recipient-name" class="col-form-label">Password Terakhir:</label>
    <input type="password" name="password" class="form-control" id="recipient-name" value="{{old('password')}}">
</div>
<div class="form-group">
    <label for="recipient-name" class="col-form-label">Password Baru:</label>
    <input type="password" name="password_baru" class="form-control" id="recipient-name" value="{{old('password_baru')}}">
</div>
<div class="form-group">
    <label for="recipient-name" class="col-form-label">Konfirmasi Password Baru:</label>
    <input type="password" name="password_konfirmasi" class="form-control" id="recipient-name" value="{{old('password_konfirmasi')}}">
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary" value="ganti-password">Simpan</button>
</div>
</form>
</div>
</div>
</div>--}}
@endsection