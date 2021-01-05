<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Illuminate\Support\Facades\Auth;
use App\jadwal;
use App\Pegumuman;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function timeZone($location)
    {
        return date_default_timezone_set($location);
    }
    public function index()
    {
        $this->timeZone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date = date("Y-m-d");
        $cek_absen = Absen::where(['user_id' => $user_id, 'date' => $date])
            ->get()
            ->first();
        if (is_null($cek_absen)) {
            $info = array(
                "status" => "Anda belum mengisi absensi!",
                "btnIn" => "",
                "btnOut" => "disabled"
            );
        } elseif ($cek_absen->time_out == NULL) {
            $info = array(
                "status" => "Jangan lupa absen keluar",
                "btnIn" => "disabled",
                "btnOut" => ""
            );
        } else {
            $info = array(
                "status" => "Absensi hari ini telah selesai!",
                "btnIn" => "disabled",
                "btnOut" => "disabled"
            );
        }

        $data_absen = Absen::where('user_id', $user_id)
            ->orderBy('date', 'desc')
            ->paginate(20);

        $hari = date('N');
        $data_jadwal_harian = jadwal::where('id', $hari)->first();

        $idKaryawan=Auth::id();
        $totalHari = Absen::where('user_id', $idKaryawan)->where('status', 'diterima')->sum('hari');
        $totalGaji = Auth::user()->gaji * $totalHari;
        
        $pengumuman =Pegumuman::all();
        
        // dd($total);
        return view('dashboard.index', compact( 'pengumuman','data_absen', 'info', 'data_jadwal_harian','totalHari','totalGaji'));
    }
    public function absen(Request $request)
    {
        $this->timeZone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date = date("Y-m-d"); // 2017-02-01
        $time = date("H:i:s"); // 12:31:20
        $catatan = $request->catatan;

        $absen = new Absen;

        // absen masuk
        // dd($request->input('btnIn'));
        if (isset($_POST["btnIn"])) {
            // cek double data
            $cek_double = $absen->where(['date' => $date, 'user_id' => $user_id])
                ->count();
            if ($cek_double > 0) {
                return redirect()->back();
            }
            $j = $absen->create([
                'user_id' => $user_id,
                'date' => $date,
                'time_in' => $time,
                'catatan' => $catatan
            ]);
            return redirect()->back();
        }
        // absen keluar
        elseif (isset($_POST["btnOut"])) {
            $absen->where(['date' => $date, 'user_id' => $user_id])
                ->update([
                    'time_out' => $time,
                    'catatan' => $catatan
                ]);
            return redirect()->back();
        }
        // dd($request->all());
        return $request->all();
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
