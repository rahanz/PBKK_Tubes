<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InputController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [UserController::class, 'view'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/pengadaan',[UserController::class, 'PengadaanObat'])->name('pengadaan');
    Route::post('/pengadaan', [InputController::class, 'input_pengadaan'])->name('InputPengadaan');
    Route::get('/tabel_pengadaan',[UserController::class, 'TabelPengadaanObat'])->name('tabel_pengadaan');
    Route::get('/kategori_obat',[UserController::class, 'KategoriObat'])->name('kategori_obat');
    Route::post('/kategori_obat',[InputController::class, 'input_kategori'])->name('InputKategori');
    Route::get('/tabel_kategori',[UserController::class, 'TabelKategoriObat'])->name('tabel_kategori');
    Route::get('/pemasok_obat', [UserController::class, 'PemasokObat'])->name('pemasok');
    Route::post('/pemasok_obat', [InputController::class, 'input_pemasok'])->name('InputPemasok');
    Route::get('/tabel_pemasok', [UserController::class, 'TabelPemasokObat'])->name('TablePemasok');
});