<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pegumuman::all();
        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengumuman = new \App\Pegumuman();
        $pengumuman->user_id = Auth::user()->id;
        $pengumuman->judul          = $request->get('judul');
        $pengumuman->isi            = $request->get('isi');
        $pengumuman->gambar         = $request->get('gambar');
        if ($request->file('gambar')) {
            if ($pengumuman->gambar && file_exists(storage_path('app/public/' . $pengumuman->gambar))) {
                Storage::delete('public/' . $pengumuman->gambar);
            }
            $image_path = $request->file('gambar')->store('gambar', 'public');
            $pengumuman->gambar = $image_path;
        }
        $pengumuman->save();

        // $custom = Role::where('nama', 'customer')->first();
        return redirect('/pengumuman')->with('sukses', 'Data Pengumuman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pegumuman::findOrFail($id);
        return view('pengumuman.edit', [
            'pengumuman' => $pengumuman
        ]);
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
        // return $request;
        $pengumuman = \App\Pegumuman::find($id);
        $pengumuman->user_id = Auth::user()->id;
        $pengumuman->judul          = $request->get('judul');
        $pengumuman->isi            = $request->get('isi');
        $pengumuman->gambar         = $request->get('gambar');
        if ($request->file('gambar')) {
            if ($pengumuman->gambar && file_exists(storage_path('app/public/storages' . $pengumuman->gambar))) {
                Storage::delete('public/' . $pengumuman->gambar);
            }
            $image_path = $request->file('gambar')->store('gambar', 'public');
            $pengumuman->gambar = $image_path;
        }
        $pengumuman->save();
        return redirect('/pengumuman')->with('sukses', 'Data Kendaraan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegumuman::destroy($id);
        return redirect('/pengumuman')->with('sukses', 'Data Kendaraan telah dihapus');
    }
}
