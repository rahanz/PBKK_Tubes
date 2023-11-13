<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengadaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat')->unique();
            $table->date('tanggal_kadaluarsa')->default(null);
            $table->enum('kategori_obat',['Obat Flu','Obat Pencernaan','Obat Penurun Panas'])->default('Obat Flu');
            $table->string('deskripsi_obat');
            $table->integer('stok_obat')->unsigned();
            $table->date('tanggal_masuk_obat')->default(null);;
            $table->string('pemasok_obat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengadaan');
    }
};
