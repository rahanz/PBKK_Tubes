@extends('layouts.index')

@section('JudulHalaman','Pemasok')
@section('PageAcces','Tabel Pemasok')

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
