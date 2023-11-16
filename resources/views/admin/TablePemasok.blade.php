@extends('layouts.index')

@section('JudulHalaman', 'Pemasok')
@section('PageAcces', 'Tabel Pemasok')

@section('TablePemasok')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Pemasok</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Pemasok</th>
                                        <th>Alamat Pemasok</th>
                                        <th>No Telepeon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($DataPemasok as $dataPemasok)
                                        <tr>
                                            <td>{{ $dataPemasok->pemasok_obat }}</td>
                                            <td>{{ $dataPemasok->alamat_pemasok }}</td>
                                            <td>{{ $dataPemasok->no_telepon }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="#" class="btn btn-warning btn-sm mr-3"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $dataPemasok->id }}"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ Route('delete_pemasok', $dataPemasok->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal{{ $dataPemasok->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $dataPemasok->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $dataPemasok->id }}">
                                                            Edit Data Pemasok</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ Route('edit_pemasok', $dataPemasok->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <label for="edit_pemasok{{ $dataPemasok->id }}">Pemasok</label>
                                                                <input type="text" class="form-control" id="edit_pemasok{{ $dataPemasok->id }}" name="edit_pemasok" value="{{ $dataPemasok->pemasok_obat }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit_alamat_pemasok{{ $dataPemasok->id }}">Alamat</label>
                                                                <textarea class="form-control" id="edit_alamat_pemasok{{ $dataPemasok->id }}" name="edit_alamat_pemasok">{{ $dataPemasok->alamat_pemasok }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit_telepon_pemasok{{ $dataPemasok->id }}">No Telepon</label>
                                                                <input type="number" class="form-control" id="edit_telepon_pemasok{{ $dataPemasok->id }}" name="edit_telepon_pemasok" value="{{ $dataPemasok->no_telepon }}">
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
                                        <th>Pemasok</th>
                                        <th>Alamat Pemasok</th>
                                        <th>No Telepeon</th>
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
