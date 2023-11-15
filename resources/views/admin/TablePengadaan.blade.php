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
                                            <td>{{ $dataPengadaan->kategoriObat->kategori }}</td>
                                            <td>{{ $dataPengadaan->deskripsi_obat }}</td>
                                            <td>{{ $dataPengadaan->stok_obat }}</td>
                                            <td>{{ $dataPengadaan->tanggal_masuk_obat }}</td>
                                            <td>{{ $dataPengadaan->pemasokObat->pemasok_obat }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="#" class="btn btn-warning btn-sm mr-3"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $dataPengadaan->id }}">Edit Data</a>
                                                    <form action="{{ Route('delete_pengadaan', $dataPengadaan->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')">Hapus Data</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal{{ $dataPengadaan->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $dataPengadaan->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editModalLabel{{ $dataPengadaan->id }}">
                                                            Edit Data Pengadaan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ Route('edit_pengadaan', $dataPengadaan->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="edit_pengadaan{{ $dataPengadaan->id }}">Nama
                                                                    Obat</label>
                                                                <input type="text" class="form-control"
                                                                    id="edit_pengadaan{{ $dataPengadaan->id }}"
                                                                    name="edit_nama_obat"
                                                                    value="{{ $dataPengadaan->nama_obat }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="edit_kadaluarsa{{ $dataPengadaan->id }}">Tanggal
                                                                    Kadaluarsa</label>
                                                                <input type="date" class="form-control"
                                                                    id="edit_kadaluarsa{{ $dataPengadaan->id }}"
                                                                    name="edit_tanggal_kadaluarsa"
                                                                    value="{{ $dataPengadaan->tanggal_kadaluarsa }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="edit_kategori{{ $dataPengadaan->id }}">Kategori</label>
                                                                <select class="form-control"
                                                                    id="edit_kategori{{ $dataPengadaan->id }}"
                                                                    name="edit_kategori_obat">
                                                                    @foreach ($data_KategoriObatTable as $kategori)
                                                                        <option value="{{ $kategori->id }}"
                                                                            {{ $kategori->id == $dataPengadaan->kategori_obat_id ? 'selected' : '' }}>
                                                                            {{ $kategori->kategori }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="edit_deskripsi{{ $dataPengadaan->id }}">Deskripsi</label>
                                                                <textarea type="text" class="form-control" id="edit_deskripsi{{ $dataPengadaan->id }}" name="edit_deskripsi_obat">
                                                                    {{ $dataPengadaan->deskripsi_obat }}
                                                                </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit_stok{{ $dataPengadaan->id }}">Stok</label>
                                                                <input type="number" class="form-control"
                                                                    id="edit_stok{{ $dataPengadaan->id }}"
                                                                    name="edit_stok_obat"
                                                                    value="{{ $dataPengadaan->stok_obat }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit_masuk{{ $dataPengadaan->id }}">Tanggal
                                                                    Masuk</label>
                                                                <input type="date" class="form-control"
                                                                    id="edit_pmasuk{{ $dataPengadaan->id }}"
                                                                    name="edit_masuk_obat"
                                                                    value="{{ $dataPengadaan->tanggal_masuk_obat }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="edit_pemasok{{ $dataPengadaan->id }}">Pemasok</label>
                                                                <select class="form-control"
                                                                    id="edit_pemasok{{ $dataPengadaan->id }}"
                                                                    name="edit_pemasok_obat">
                                                                    @foreach ($data_PemasokObatTable as $pemasok)
                                                                        <option value="{{ $pemasok->id }}" {{ $pemasok->id == $dataPengadaan->pemasok_obat_id ? 'selected' : '' }}>
                                                                            {{ $pemasok->pemasok_obat }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
