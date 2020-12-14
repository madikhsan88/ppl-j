<?php

namespace App\Http\Controllers;

use App\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data_jadwal =jadwal::all();
        return view ('jadwal.index',['data_jadwal' => $data_jadwal]);
    }

    public function edit(Request $request,$id)
    {
        $jadwal= \App\Jadwal::find($id);
        $jadwal->update($request->all());
        return redirect('/jadwal')->with('sukses','Data Berhasil Diubah');
    }

    public function getJadwal($id)
    {
        $jadwal = jadwal::findOrFail($id);

        return json_encode($jadwal);
    }

}   
