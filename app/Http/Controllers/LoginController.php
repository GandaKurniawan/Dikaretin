<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use Dotenv\Regex\Success;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            Alert::success('Sukses','Berhasil Login');
            return redirect('/dashboard');
        }
        Alert::error('Gagal Login','Email dan Password Anda Tidak Sesuai, Harap Periksa Kembali!!!');
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
