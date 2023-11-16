<?php

namespace App\Http\Controllers;

use App\Models\KategoriObat;
use App\Models\Pemasok;
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
            return redirect()->intended('/');
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
        return redirect('login');
    }

    public function PengadaanObat()
    {
        $user = Auth::user();

        $data_KategoriObat = KategoriObat::all();
        $data_PemasokObat = Pemasok::all();
        return view('admin.Pengadaan', ['user'=>$user])->with('data_KategoriObatTable', $data_KategoriObat)->with('data_PemasokObatTable', $data_PemasokObat);
    }

    public function TabelPengadaanObat()
    {
        $user = Auth::user();

        $data_KategoriObat = KategoriObat::all();
        $data_PemasokObat = Pemasok::all();
        $DataPengadaanObat = PengadaanObat::all();
        return view('admin.TablePengadaan', ['user'=>$user])->with('DataPengadaanObat', $DataPengadaanObat)->with('data_KategoriObatTable', $data_KategoriObat)->with('data_PemasokObatTable', $data_PemasokObat);
    }

    public function KategoriObat()
    {
        $user = Auth::user();
        return view('admin.TambahKategori', ['user'=>$user]);
    }

    public function TabelKategoriObat()
    {
        $user = Auth::user();
        $KategoriObat = KategoriObat::all();
        return view('admin.TableKategori', ['user'=>$user])->with('KategoriObat', $KategoriObat);
    }

    public function PemasokObat()
    {
        $user = Auth::user();
        return view('admin.Pemasok', ['user'=>$user]);
    }

    public function TabelPemasokObat()
    {
        $user = Auth::user();
        $DataPemasokObat = Pemasok::all();
        return view ('admin.TablePemasok', ['user'=>$user])->with('DataPemasok', $DataPemasokObat);
    }
}
