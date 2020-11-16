<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect ('/dashboard');
        }
        return redirect ('/login');
    }
    public function logout()
    {
        return view('auth.login');
    }
}
