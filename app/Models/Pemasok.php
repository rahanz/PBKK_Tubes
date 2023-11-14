<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    public $timestamps = false;
    protected $table = 'pemasok';
    protected $fillable = 
    [
        'pemasok_obat',
        'alamat_pemasok',
        'no_telepon'
    ];
}
