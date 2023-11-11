@extends('layouts.index')

@section('PageAcces', 'Persediaan Obat')

@section('Persediaan')
    <div class="mt-1 my-4 p-4 bg-body rounded shadow-sm">
        <h1 class="mb-4">Persediaan Obat</h1>

        <!-- Form Tambah Data -->
        <form id="formTambah">
            <div class="form-group">
                <label for="namaObat">Nama Obat:</label>
                <input type="text" class="form-control" id="namaObat" required>
            </div>
            <div class="form-group">
                <label for="stokObat">Stok Obat:</label>
                <input type="number" class="form-control" id="stokObat" required>
            </div>
            <div class="form-group">
              <label for="stokObat">Tanggal Kadaluarsa:</label>
              <input type="date" class="form-control" id="stokObat" required>
          </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

        <!-- Tabel Data -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nama Obat</th>
                    <th>Stok Obat</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabelPersediaan">
                <!-- Data akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>
@endsection
