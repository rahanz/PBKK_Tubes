@extends('layouts.index')

@section('PageAcces', 'Pemasok Obat')

@section('Pemasok')
    <div class="mt-1 my-4 p-4 bg-body rounded shadow-sm">
        <h1 class="mb-4">Manajemen Pemasok Obat</h1>

        <!-- Formulir Pemasok Obat -->
        <form id="formPemasok">
            <div class="form-group">
                <label for="namaPemasok">Nama Pemasok:</label>
                <input type="text" class="form-control" id="namaPemasok" required>
            </div>
            <div class="form-group">
                <label for="kontakPemasok">Kontak Pemasok:</label>
                <input type="text" class="form-control" id="kontakPemasok" required>
            </div>
            <div class="form-group">
                <label for="alamatPemasok">Alamat Pemasok:</label>
                <textarea class="form-control" id="alamatPemasok" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pemasok</button>
        </form>

        <!-- Tabel Pemasok -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nama Pemasok</th>
                    <th>Kontak Pemasok</th>
                    <th>Alamat Pemasok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabelPemasok">
                <!-- Data pemasok akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>
@endsection
