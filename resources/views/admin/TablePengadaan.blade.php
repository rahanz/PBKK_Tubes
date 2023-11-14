@extends('layouts.index')

@section('JudulHalaman', 'Tabel Pengadaan Obat')
@section('PageAcces', 'Tabel Pengadaan Obat')

@section('TablePengadaan')
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
                                                <a href="" class="btn btn-block btn-warning btn-sm mr-3">Edit</a>
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
                                        <th>Aksi</th>
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
