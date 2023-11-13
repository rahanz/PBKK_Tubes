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
        'kategori_obat',
        'deskripsi_obat',
        'stok_obat',
        'tangal_masuk_obat',
        'pemasok_obat'
    ];
    protected $table = 'pengadaan';
}
