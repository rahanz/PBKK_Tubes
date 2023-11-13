@extends('layouts.index')

@section('JudulHalaman', 'Kategori')
@section('PageAcces', 'Tabel Kategori Obat')

@section('TabelKategori')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Kategori Obat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Kategori Obat</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($KategoriObat as $dataKategori)
                                        <tr>
                                            <td>{{ $dataKategori->kategori }}</td>
                                            <td>{{ $dataKategori->deskripsi }}</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-warning btn-sm">Edit</button>
                                                <button type="button"
                                                    class="btn btn-block btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kategori Obat</th>
                                        <th>Deskripsi</th>
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
