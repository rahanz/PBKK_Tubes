@extends('layouts.index')

@section('PageAcces', 'Pengadaan Obat')

@section('Pengadaan')
    <section class="content">
        <div class="container-fluid">
            <div class="mt-1 my-3 p-4 bg-body rounded shadow-sm">
                <h1 class="mb-4">Pengadaan Obat</h1>

                <!-- Form Tambah Data -->
                <form method="POST" action="{{ route('InputPengadaan') }}">
                    @csrf
                    <div class="form-group">
                        <label for="NamaObat">Nama Obat :</label>
                        <input type="text" class="form-control" name="NamaObat">
                    </div>
                    <div class="form-group">
                        <label for="TanggalKadaluarsa">Tanggal Kadaluarsa :</label>
                        <input type="date" class="form-control" name="TanggalKadaluarsa">
                    </div>
                    <div class="form-group">
                        <label for="kategoriObat">Kategori :</label>
                        <select class="form-control" name="KategoriObat">
                            <option value="Obat Flu">Obat Flu</option>
                            <option value="Obat Pencernaan">Obat Pencernaan</option>
                            <option value="Obat Penurun Panas">Obat Penurun Panas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="DeskripsiObat" class="form-label-lg">Deskripsi :</label>
                        <textarea type="text" class="form-control" name="DeskripsiObat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stokObat">Stok Obat :</label>
                        <input type="number" class="form-control" name="stokObat">
                    </div>
                    <div class="form-group">
                        <label for="TanggalMasukObat">Tanggal Masuk :</label>
                        <input type="date" class="form-control" name="Tanggal_Masuk">
                    </div>
                    <div class="form-group">
                        <label for="PemasokObat">Pemasok :</label>
                        <input type="text" class="form-control" name="PemasokObat">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Tabel Data -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Pengadaan Obat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Tanggal Kadaluarsa</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Stok Obat</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Pemasok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($DataPengadaanObat as $dataPengadaan)
                                        <tr>
                                            <td>{{ $dataPengadaan->nama_obat }}</td>
                                            <td>{{ $dataPengadaan->tanggal_kadaluarsa }}</td>
                                            <td>{{ $dataPengadaan->kategori_obat }}</td>
                                            <td>{{ $dataPengadaan->deskripsi_obat }}</td>
                                            <td>{{ $dataPengadaan->stok_obat }}</td>
                                            <td>{{ $dataPengadaan->tanggal_masuk_obat }}</td>
                                            <td>{{ $dataPengadaan->pemasok_obat }}</td>
                                            <td>
                                                <button type="button" class="btn btn-block btn-warning btn-sm">Edit</button>
                                                <button type="button" class="btn btn-block btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Tanggal Kadaluarsa</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Stok Obat</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Pemasok</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- Data akan ditampilkan di sini -->
                    </tbody>
                    </table>
                </div> <!-- cool-12 -->
            </div> <!-- row -->
        </div> <!-- container-fluid -->
    </section>
@endsection
