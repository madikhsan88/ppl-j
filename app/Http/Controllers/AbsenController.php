<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('absen.index', compact('data_absen', 'info', 'cek_absen'));
    }
    public function absen(Request $request)
    {
        // dd($request->all());
        $this->timeZone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date = date("Y-m-d"); // 2017-02-01
        $time = date("H:i:s"); // 12:31:20
        $catatan = $request->catatan;

        switch ($request->input('submit')) {
            case 'btnIn':
                $absen = new Absen();
                $absen->create([
                    'user_id' => Auth::user()->id,
                    'date' => $date,
                    'time_in' => $time,
                    'catatan' => $catatan,
                    'status' => 'belum diterima'
                ]);
                return redirect()->back();
                break;
            
            case 'btnOut':
                $jamOut = (int)date('H');
                $hari = 1;
                    if($jamOut<17) $hari =0.5;
                $absenOut = Absen::where(['date' => $date, 'user_id' => $user_id])
                        ->update([
                            'time_out' => $time,
                            'catatan' => $catatan,
                            'hari' =>$hari
                        ]);
                return redirect()->back();
                break;
        }


        // dd($request->all());
        return $request->all();
    }
    public function show()
    {
        $data_absen= Absen::all();
        return view('absen.pengawas', ['data_absen'=> $data_absen]);
    }
    

    public function StatusDiterima($id)
    {
        $absen = Absen::findOrFail($id);
        $absen->status = 'diterima';
        $absen->save();
        return back();
    }

    public function StatusDitolak($id)
    {
        $absen = Absen::findOrFail($id);
        $absen->status = 'ditolak';
        $absen->save();
        return back();
    }
    public function destroy($id)
    {
        $absen = DB::delete('delete from absen where user_id = :user_id', ['user_id'=>$id]);

        return back()->with('sukses', 'Pendapatan sudah dibayarkan');
    }   
}
