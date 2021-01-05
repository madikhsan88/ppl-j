@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <!-- <section class="content"> -->
    <div class="container">
        <section class="content-header">
            <h3>
                User Profile
            </h3>
        </section>
        <div class="card">
            <!-- <div class="row">
            <div class="col-md-6"> -->
            <div class="card-header">

                <!-- Profile Image -->
                <h3 class="profile-username text-center">{{auth()->user()->nama}}</h3>
            </div>
            <div class="card-body">

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Nama Lengkap</b> <a class="float-right">{{auth()->user()->nama}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Alamat</b> <a class="float-right">{{auth()->user()->alamat}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{auth()->user()->email}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Jenis Kelamin</b> <a class="float-right">{{auth()->user()->jenis_kelamin}}</a>
                    </li>
                </ul>

                <a href="/profile/{{Auth()->user()->id}}/edit" class="btn btn-primary btn-block"><b>Edit</b></a>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- </div>
    </div> -->
        <!-- </section> -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@endsection