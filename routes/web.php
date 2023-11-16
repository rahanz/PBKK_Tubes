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
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/',[UserController::class, 'PengadaanObat'])->name('pengadaan');
    Route::post('/pengadaan', [InputController::class, 'input_pengadaan'])->name('InputPengadaan');
    Route::get('/tabel_pengadaan',[UserController::class, 'TabelPengadaanObat'])->name('tabel_pengadaan');
    Route::put('/edit_pengadaan/{id}', [InputController::class, 'edit_pengadaan'])->name('edit_pengadaan');
    Route::delete('/delete_pengadaan/{id}', [InputController::class, 'delete_pengadaan'])->name('delete_pengadaan');
    Route::get('/kategori_obat',[UserController::class, 'KategoriObat'])->name('kategori_obat');
    Route::post('/kategori_obat',[InputController::class, 'input_kategori'])->name('InputKategori');
    Route::get('/tabel_kategori',[UserController::class, 'TabelKategoriObat'])->name('tabel_kategori');
    Route::put('/edit_kategori/{id}', [InputController::class, 'edit_kategori'])->name('edit_kategori');
    Route::delete('/delete_kategori/{id}', [InputController::class, 'delete_kategori'])->name('delete_kategori');
    Route::get('/pemasok_obat', [UserController::class, 'PemasokObat'])->name('pemasok');
    Route::post('/pemasok_obat', [InputController::class, 'input_pemasok'])->name('InputPemasok');
    Route::get('/tabel_pemasok', [UserController::class, 'TabelPemasokObat'])->name('TablePemasok');
    Route::put('/edit_pemasok/{id}', [InputController::class, 'edit_pemasok'])->name('edit_pemasok');
    Route::delete('/delete_pemasok/{id}', [InputController::class, 'delete_pemasok'])->name('delete_pemasok');
});