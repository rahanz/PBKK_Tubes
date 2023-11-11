@extends('layouts.index')

@section('PageAcces', 'Laporan')

@section('Laporan')
    <div class="mt-1 my-4 p-4 bg-body rounded shadow-sm">
        <h1 class="mb-3">Laporan Manajemen Obat</h1>

        <!-- Filter Laporan -->
        <form id="formFilterLaporan">
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
                    <label for="jenisLaporan">Jenis Laporan:</label>
                    <select class="form-control" id="jenisLaporan" required>
                        <option value="persediaan">Laporan Persediaan Obat</option>
                        <option value="pengadaan">Laporan Pengadaan Obat</option>
                        <option value="pemasok">Laporan Pemasok</option>
                        <!-- Tambahkan jenis laporan lainnya sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Generate Laporan</button>
        </form>

        <!-- Hasil Laporan -->
        <div id="hasilLaporan" class="mt-4">
            <!-- Hasil laporan akan ditampilkan di sini -->
        </div>
    </div>
@endsection
