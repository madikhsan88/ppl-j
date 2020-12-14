<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timeZone($location)
    {
        return date_default_timezone_set($location);
    }
    public function index()
    {
        $role = Role::whereName('karyawan')->first();
        $karyawan = DB::table('model_has_roles')->where('role_id', $role->id)->get();

        return view('peminjaman.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->timeZone('Asia/Jakarta');
        $date = date("Y-m-d"); // 2017-02-01
        $peminjaman = Peminjaman::create([
            "user_id" => $request->input('user_id'),
            "date" => $date,
            "nominal" => $request->input('nominal'),
            "keterangan" => $request->input('keterangan'),
            "status" => 'diajukan'
        ]);
        $peminjaman->save();
        $lastId = $peminjaman->id;
        return redirect('/peminjaman')->with('sukses', 'Data Berhasil Ditambahkan')->with('lastId', $lastId);
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
    public function show()
    {
        $user_id = Auth::user()->id;
        $data_peminjaman = Peminjaman::where('user_id', $user_id)
            ->orderBy('date', 'desc')
            ->paginate(20);
        return view('peminjaman.detail', compact('data_peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete($peminjaman);
        return redirect('/peminjaman');
    }
}
