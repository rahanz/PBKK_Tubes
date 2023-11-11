@extends('layouts.index')

@section('PageAcces', 'Aktivitas')

@section('Aktivitas')
    <div class="mt-1 my-4 p-4 bg-body rounded shadow-sm">
        <h1 class="mb-4">Aktivitas Log</h1>

        <!-- Filter Log -->
        <form id="formFilterLog">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tanggalMulai">Tanggal Mulai:</label>
                    <input type="date" class="form-control" id="tanggalMulai" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="tanggalSelesai">Tanggal Selesai:</label>
                    <input type="date" class="form-control" id="tanggalSelesai" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="jenisAktivitas">Jenis Aktivitas:</label>
                    <select class="form-control" id="jenisAktivitas" required>
                        <option value="pengadaan">Pengadaan Obat</option>
                        <option value="persediaan">Persediaan Obat</option>
                        <option value="pemasok">Pemasok Obat</option>
                        <option value="pengguna">Manajemen Pengguna</option>
                        <!-- Tambahkan jenis aktivitas lainnya sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filter Aktivitas</button>
        </form>

        <!-- Log Aktivitas -->
        <div id="logAktivitas" class="mt-4">
            <!-- Log aktivitas akan ditampilkan di sini -->
        </div>
    </div>
@endsection
