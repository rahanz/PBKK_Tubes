<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengadaanObat extends Model
{
    public $timestamps = false;
    protected $fillable = 
    [
        'nama_obat',
        'tanggal_kadaluarsa',
        'deskripsi_obat',
        'stok_obat',
        'tanggal_masuk_obat',
        'pemasok_obat',
        'kategori_obat_id',
        'pemasok_obat_id'
    ];
    protected $dates = ['tanggal_kadaluarsa','tanggal_masuk_obat'];
    protected $table = 'pengadaan';

    public function kategoriObat()
    {
        return $this->belongsTo(KategoriObat::class, 'kategori_obat_id');
    }

    public function pemasokObat()
    {
        return $this->belongsTo(Pemasok::class, 'pemasok_obat_id');
    }
}
