<?php

namespace App\Http\Controllers;

use App\User;
use App\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::whereName('karyawan')->first();
        $karyawan = DB::table('model_has_roles')->where('role_id', $role->id)->get();

        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $karyawan = User::create([
            "nama" => $request->input('nama'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "email" => $request->input('email'),
            "password" => bcrypt('123456'),
            "alamat" => $request->input('alamat'),
            "gaji" => $request->input('gaji')
        ]);
        $karyawan->assignRole('karyawan')->with('sukses', 'Data Berhasil Ditambahkan');
        return back();
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
        return view('profile.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = User::find($id);
        return view('karyawan/edit', ['karyawan' => $karyawan]);
    }
    public function update(Request $request, $id)
    {
        $karyawan = User::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $karyawan = User::find($id);
        $karyawan->delete($karyawan);
        return redirect('/karyawan')->with('sukses', 'Data Berhasil Dihapus');
    }
    public function editProfile($id)
    {
        $profile = User::find($id);
        return view('profile/edit', ['profile' => $profile]);
    }
    public function updateProfile(Request $request, $id)
    {
        $profile = User::find($id);
        $profile->update($request->all());
        return redirect('/profile')->with('sukses', 'Data Berhasil Diedit');
    }
    public function password()
    {
        return view('gantiPassword');
    }
    public function ganti_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:5|max:20',
            'password_baru' => 'required|min:5|max:20',
            'password_konfirmasi' => 'required|min:5|max:20|same:password_baru'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        if (Hash::check($request->input('password'), $user->password, []) == true) {
            $user->password = bcrypt($request->input('password_baru'));
            $user->save();
            return view('auth.login')->with('success', 'Password berhasil diganti');
        } else {
            return back()->with('alert', 'Password Tidak Cocok');
        }
    }
}
