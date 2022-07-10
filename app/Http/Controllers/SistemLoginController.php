<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SistemLoginController extends Controller
{
    // Membuka Halaman Login
    public function halamanLogin()
    {
        $penggunas = User::all();
    	return view('halaman_login', compact('penggunas'));
    }

    // Verifikasi Login
    public function verifikasiLogin(Request $request)
    {
    	if(Auth::attempt($request->only('email', 'password')))
    	{
    		return redirect('/dashboard');
    	}
        Session::flash('gagal_login', 'Maaf username atau password anda salah');
    	return redirect('/login');
    }

    // Proses Logout
    public function prosesLogout()
    {
    	Auth::logout();
    	return redirect('/login');
    }

    // Membuka Halaman Login
    public function halamanregistrasi()
    {
    	return view('halaman_register');
    }


    // Registrasi Awal
    public function registrasiAwal(Request $req)
    {
            $penggunas = new User;
            $penggunas->name = $req->nama;
            $penggunas->nip = $req->nip;
            $penggunas->role = "user";
            $penggunas->email = $req->email;
            $penggunas->password = Hash::make($req->password);
            $penggunas->remember_token = Str::random(60);
            $penggunas->save();
            Session::flash('tersimpan', 'Registrasi Berhasil');
            return redirect('/login');
       
    }
}
