<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriObat extends Model
{
    public $timestamps = false;
    protected $table = 'kategori_obat';
    protected $fillable = ['kategori','deskripsi'];
}
