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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($KategoriObat as $dataKategori)
                                        <tr>
                                            <td>{{ $dataKategori->kategori }}</td>
                                            <td>{{ $dataKategori->deskripsi }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="#" class="btn btn-warning btn-sm mr-3"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $dataKategori->id }}"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('delete_kategori', $dataKategori->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal{{ $dataKategori->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $dataKategori->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $dataKategori->id }}">
                                                            Edit Data Kategori Obat</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ Route('edit_kategori', $dataKategori->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <label for="edit_kategori{{ $dataKategori->id }}">Kategori Obat</label>
                                                                <input type="text" class="form-control" id="edit_kategori{{ $dataKategori->id }}" name="edit_kategori" value="{{ $dataKategori->kategori }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label
                                                                    for="edit_deskripsi{{ $dataKategori->id }}">Deskripsi</label>
                                                                <textarea class="form-control" id="edit_deskripsi{{ $dataKategori->id }}" name="edit_deskripsi">{{ $dataKategori->deskripsi }}</textarea>
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
