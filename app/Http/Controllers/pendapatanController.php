<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Illuminate\Support\Facades\Auth;
use App\jadwal;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class pendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idKaryawan=Auth::id();
        $gaji = Absen::join('users','users.id','=','absen.user_id')->get()->groupBy('user_id');
        
        $role = Role::whereName('karyawan')->first();
        // $karyawan_id = DB::table('model_has_roles')->where('role_id', $role->id)->pluck('model_id');
        
        $karyawan = DB::select('select users.id as id, (sum(hari)*gaji) as total_gaji, nama, sum(hari) as hari, gaji from users join absen on users.id = absen.user_id where absen.status = "diterima" GROUP BY users.id');
        
        // dd($karyawan);
        return view('pendapatan.index', compact('karyawan'));
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
        //
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
        //
    }
}
