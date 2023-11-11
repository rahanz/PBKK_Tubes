@extends('layouts.index')

@section('PageAcces', 'Pengadaan Obat')

@section('Pengadaan')
    <div class="mt-1 my-4 p-4 bg-body rounded shadow-sm">
        <h1 class="mb-4">Pengadaan Obat</h1>

        <!-- Formulir Pengadaan Obat -->
        <form id="formPengadaan">
            <div class="form-group">
                <label for="namaObat">Nama Obat:</label>
                <input type="text" class="form-control" id="namaObat" required>
            </div>
            <div class="form-group">
                <label for="jumlahObat">Jumlah Obat:</label>
                <input type="number" class="form-control" id="jumlahObat" required>
            </div>
            <div class="form-group">
                <label for="tanggalKadaluarsa">Tanggal Kadaluarsa:</label>
                <input type="date" class="form-control" id="tanggalKadaluarsa" required>
            </div>
            <div class="form-group">
                <label for="pemasok">Pemasok:</label>
                <select class="form-control" id="pemasok" required>
                    <option value="pemasok1">Pemasok 1</option>
                    <option value="pemasok2">Pemasok 2</option>
                    <!-- Tambahkan opsi pemasok lainnya sesuai kebutuhan -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajukan Pengadaan</button>
        </form>

        <!-- Tabel Riwayat Pengadaan -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nomor Pengadaan</th>
                    <th>Nama Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Pemasok</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabelRiwayatPengadaan">
                <!-- Data riwayat pengadaan akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>
@endsection
