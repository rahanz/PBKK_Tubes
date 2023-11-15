<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\KategoriObat;
use App\Models\Pemasok;
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
            'DeskripsiObat' => 'required',
            'stokObat' => 'required|integer|min:0',
            'Tanggal_Masuk' => 'required|date',
        ],
        [
            'NamaObat.required' => 'nama obat tidak boleh kosong',
            'NamaObat.unique' => 'nama obat sudah ada dalam database',
            'TanggalKadaluarsa.required' => 'tanggal kadaluarsa tidak boleh kosong',
            'DeskripsiObat.required' => 'deskripsi obat tidak boleh kosong',
            'stokObat.required' => 'stok obat tidak boleh kosong',
            'stokObat.integer' => 'stok obat harus bernilai angka tidak boleh kurang dari 0',
            'Tanggal_Masuk.required' => 'tanggal masuk obat tidak boleh kosong',
        ]);

        PengadaanObat::create([
            'nama_obat' => $request->input('NamaObat'),
            'tanggal_kadaluarsa' => Carbon::parse($request->input('TanggalKadaluarsa'))->format('Y-m-d'),
            'kategori_obat_id' => $request->input('KategoriObat'),
            'deskripsi_obat' => $request->input('DeskripsiObat'),
            'stok_obat' => $request->input('stokObat'),
            'tanggal_masuk_obat' => Carbon::parse($request->input('Tanggal_Masuk'))->format('Y-m-d'),
            'pemasok_obat_id' => $request->input('PemasokObat')
        ]);

        return redirect()->route('pengadaan')->with('success', 'Data pengadaan obat berhasil ditambahkan.');
    }

    public function edit_pengadaan(Request $request, $id)
    {
        $request->validate
        ([
            'edit_nama_obat' => 'required',
            'edit_tanggal_kadaluarsa' => 'required|date_format:Y-m-d',
            'edit_kategori_obat' => 'required',
            'edit_deskripsi_obat' => 'required',
            'edit_stok_obat' => 'required|integer|min:0',
            'edit_masuk_obat' => 'required|date',
            'edit_pemasok_obat' => 'required'
        ],
        [
            'edit_nama_obat.required' => 'nama obat tidak boleh kosong',
            'edit_tanggal_kadaluarsa.required' => 'tanggal kadaluarsa tidak boleh kosong',
            'edit_kategori_obat.required' => 'kategori obat tidak boleh kosong',
            'edit_deskripsi_obat.required' => 'deskripsi obat tidak boleh kosong',
            'edit_stok_obat.required' => 'stok obat tidak boleh kosong',
            'edit_stok_obat.min' => 'stok obat tidak boleh bernilai negatif',
            'edit_masuk_obat.required' => 'tanggal masuk tidak boleh kosong',
            'edit_pemasok_obat.required' => 'pemasok obat tidak boleh kosong'
        ]);

        $pengadaan = PengadaanObat::find($id);
        $pengadaan->nama_obat = $request->input('edit_nama_obat');
        $pengadaan->tanggal_kadaluarsa = Carbon::createFromFormat('Y-m-d', $request->input('edit_tanggal_kadaluarsa'));
        $pengadaan->kategori_obat_id = $request->input('edit_kategori_obat');
        $pengadaan->deskripsi_obat = $request->input('edit_deskripsi_obat');
        $pengadaan->stok_obat = $request->input('edit_stok_obat');
        $pengadaan->tanggal_masuk_obat = Carbon::createFromFormat('Y-m-d', $request->input('edit_masuk_obat'));
        $pengadaan->pemasok_obat_id = $request->input('edit_pemasok_obat');
        $pengadaan->save();

        return redirect()->route('tabel_pengadaan')->with('success', 'Data pengadaan obat berhasil diperbarui.');
    }

    public function delete_pengadaan($id)
    {
        $pemasok = PengadaanObat::find($id);
        $pemasok->delete();

        return redirect()->route('tabel_pengadaan')->with('success', 'Data kategori obat berhasil dihapus.');
    }

    public function input_kategori(Request $request)
    {
        $request->validate
        ([
            'nama_kategori' => 'required|unique:kategori_obat,kategori',
            'deskripsi_kategori' => 'required
        ']);
        KategoriObat::create
        ([
            'kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi_kategori
        ]);
        return redirect()->route('kategori_obat')->with('success', 'Kategori obat berhasil ditambahkan.');
    }

    public function edit_kategori(Request $request, $id)
    {
        $request->validate
        ([
            'edit_kategori' => 'required',
            'edit_deskripsi' => 'required'
        ],
        [
            'edit_kategori.required' => 'kategori obat tidak boleh kosong',
            'edit_deskripsi.required' => 'deskripsi obat tidak boleh kosong'
        ]);

        $kategori = KategoriObat::find($id);
        $kategori->kategori = $request->input('edit_kategori');
        $kategori->deskripsi = $request->input('edit_deskripsi');
        $kategori->save();

        return redirect()->route('tabel_kategori')->with('success', 'Data kategori obat berhasil diperbarui.');
    }

    public function delete_kategori($id)
    {
        // Find and delete the data
        $kategori = KategoriObat::find($id);
        $kategori->delete();

        return redirect()->route('tabel_kategori')->with('success', 'Data kategori obat berhasil dihapus.');
    }

    public function input_pemasok(Request $request)
    {
        $request->validate
        ([
            'PemasokObat' => 'required|unique:pemasok,pemasok_obat',
            'AlamatPemasok' => 'required',
            'NoTelepon' => 'required|integer|min:0'
        ]);
        Pemasok::create
        ([
            'pemasok_obat' => $request->PemasokObat,
            'alamat_pemasok' => $request->AlamatPemasok,
            'no_telepon' => $request->NoTelepon
        ]);
        return redirect()->route('pemasok')->with('success', 'Pemasok obat berhasil ditambahkan.');
    }

    public function edit_pemasok(Request $request, $id)
    {
        $request->validate
        ([
            'edit_pemasok' => 'required',
            'edit_alamat_pemasok' => 'required',
            'edit_telepon_pemasok' => 'required|integer|min:0'
        ],
        [
            'edit_pemasok.required' => 'pemasok tidak boleh kosong',
            'edit_alamat_pemasok.required' => 'alamat pemasok tidak boleh kosong',
            'edit_telepon_pemasok.required' => 'nomor telpeon tidak boleh kosong',
            'edit_telepon_pemasok.min' => 'tidak boleh bernilai negatif',
            'edit_telepon_pemasok.integer' => 'nomor telpeon harus berupa angka',
        ]);

        $pemasok = Pemasok::find($id);
        $pemasok->pemasok_obat = $request->input('edit_pemasok');
        $pemasok->alamat_pemasok = $request->input('edit_alamat_pemasok');
        $pemasok->no_telepon = $request->input('edit_telepon_pemasok');
        $pemasok->save();

        return redirect()->route('TablePemasok')->with('success', 'Data kategori obat berhasil diperbarui.');
    }

    public function delete_pemasok($id)
    {
        $pemasok = Pemasok::find($id);
        $pemasok->delete();

        return redirect()->route('TablePemasok')->with('success', 'Data kategori obat berhasil dihapus.');
    }
}
