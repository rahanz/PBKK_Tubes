<?php

namespace App\Http\Controllers;

use App\Models\PengadaanObat;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(){
        return view('login.Login');
    }

    public function login(Request $request){
        $credentials = $request->only('User_Name', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('dashboard'); // Sesuaikan dengan rute dashboard Anda
        } else {
            // Jika autentikasi gagal
            return redirect()->back()->with('error', 'Login failed. Check your username and password.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function PengadaanObat()
    {
        $DataPengadaanObat = PengadaanObat::all();
        return view('admin.Pengadaan')->with('DataPengadaanObat', $DataPengadaanObat);
    }
}
