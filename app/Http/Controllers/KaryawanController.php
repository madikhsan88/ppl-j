<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_karyawan = \App\karyawan::all();
        return view('karyawan.index',['data_karyawan'=>$data_karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //insert ke tabel user
        $user= new \App\User;
        $user->role = 'siswa';
        $user->nama = $request->nama_lengkap;
        $user->email= $request->email;
        $user->password= bcrypt('123456');
        $user->save();

        //insert table karyawan//
        $request->request->add(['user_id' => $user->id]);
        $karyawan= \App\karyawan::create($request->all());
        return redirect('/karyawan');
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profil($id)
    {
        $karyawan= \App\karyawan::find($id);
        return view ('karyawan/profil',['karyawan'=> $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $karyawan= \App\karyawan::find($id);
        return view ('karyawan/edit',['karyawan'=> $karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karyawan= \App\karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $karyawan= \App\karyawan::find($id);
        $karyawan->delete($karyawan);
        return redirect('/karyawan');
    }
}
