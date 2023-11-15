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
            $table->string('deskripsi_obat');
            $table->integer('stok_obat')->unsigned();
            $table->date('tanggal_masuk_obat')->default(null);
            $table->foreignId('kategori_obat_id')->constrained('kategori_obat');
            $table->foreignId('pemasok_obat_id')->constrained('pemasok');
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
