<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\User;
use App\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925

use App\User;
use App\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
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
<<<<<<< HEAD
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
=======
    }

    public function pengawas()
    {
        $role = Role::whereName('pengawas')->first();
        $pengawas = DB::table('model_has_roles')->where('role_id', $role->id)->get();


        return view('pengawas.index', compact('pengawas'));
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

    public function addPengawas(Request $request)
    {
        $pengawas = User::create([
            "nama" => $request->input('nama'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "email" => $request->input('email'),
            "password" => bcrypt('123456'),
            "alamat" => $request->input('alamat')
        ]);
        $pengawas->assignRole('pengawas')->with('sukses', 'Data Berhasil Ditambahkan');
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
        return view ('profile.index');
    }

    /**
     * Show the form for editing the specified resource.
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
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
=======
    public function edit($id)
    {
        $karyawan= User::find($id);
        return view ('karyawan/edit',['karyawan'=> $karyawan]);
    }
    public function update(Request $request, $id)
    {
        $karyawan= User::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $karyawan= User::find($id);
        $karyawan->delete($karyawan);
        return redirect('/karyawan')->with('sukses','Data Berhasil Dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPengawas($id)
    {
        $pengawas= User::find($id);
        return view('pengawas/edit',['pengawas'=> $pengawas]);
    }
    public function updatePengawas(Request $request, $id)
    {
        $pengawas= User::find($id);
        $pengawas->update($request->all());
        return redirect('/pengawas')->with('sukses','Data Berhasil Diedit');
>>>>>>> 472d3bbfad31822a10ac159405ea535277d4e925
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePengawas($id)
    {
        $pengawas= User::find($id);
        $pengawas->delete($pengawas);
        return redirect('/pengawas')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function editProfile($id)
    {
        $profile= User::find($id);
        return view ('profile/edit',['profile'=> $profile]);
    }
    public function updateProfile(Request $request, $id)
    {
        $profile= User::find($id);
        $profile->update($request->all());
        return redirect('/profile')->with('sukses','Data Berhasil Diedit');
    } 
}
