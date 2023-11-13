<?php

namespace App\Http\Controllers;

use App\Models\PengadaanObat;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function input_pengadaan(Request $request)
    {
        $request->validate
        ([
            'NamaObat' => 'required|unique:pengadaan,nama_obat',
            'TanggalKadaluarsa' => 'required|date',
            'KategoriObat' => 'required',
            'DeskripsiObat' => 'required',
            'stokObat' => 'required|integer|min:0',
            'Tanggal_Masuk' => 'required|date',
            'PemasokObat' => 'required'
        ],
        [
            'NamaObat.required' => 'nama obat tidak boleh kosong',
            'NamaObat.unique' => 'nama obat sudah ada dalam database',
            'TanggalKadaluarsa.required' => 'tanggal kadaluarsa tidak boleh kosong',
            'DeskripsiObat.required' => 'deskripsi obat tidak boleh kosong',
            'stokObat.required' => 'stok obat tidak boleh kosong',
            'stokObat.integer' => 'stok obat harus bernilai angka tidak boleh kurang dari 0',
            'Tanggal_Masuk.required' => 'tanggal masuk obat tidak boleh kosong',
            'PemasokObat.required' => 'pemasok obat tidak boleh kosong',
        ]);

        PengadaanObat::create([
            'nama_obat' => $request->input('NamaObat'),
            'tanggal_kadaluarsa' => $request->input('TanggalKadaluarsa'),
            'kategori_obat' => $request->input('KategoriObat'),
            'deskripsi_obat' => $request->input('DeskripsiObat'),
            'stok_obat' => $request->input('stokObat'),
            'tanggal_masuk_obat' => $request->input('Tanggal_Masuk'),
            'pemasok_obat' => $request->input('PemasokObat')
        ]);

        return redirect()->route('pengadaan')->with('success', 'Data persediaan obat berhasil ditambahkan.');
    }
}
