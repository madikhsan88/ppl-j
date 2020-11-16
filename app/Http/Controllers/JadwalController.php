<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data_jadwal = \App\jadwal::all();
        return view ('jadwal.index',['data_jadwal' => $data_jadwal]);
    }

    public function edit(Request $request,$id)
    {
        $jadwal= \App\Jadwal::find($id);
        $jadwal->update($request->all());
        return redirect('/jadwal')->with('sukses','Data Berhasil Diedit');
    }
}
