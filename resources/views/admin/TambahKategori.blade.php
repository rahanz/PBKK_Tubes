@extends('layouts.index')

@section('JudulHalaman', 'Tambah Kategori')
@section('PageAcces', 'Tambah Kategori')

@section('TambahKategori')
    <section class="content">
        <div class="container-fluid">
            <div class="mt-1 my-3 p-4 bg-body rounded shadow-sm">
                <form method="POST" action="{{ route('InputKategori') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori Obat :</label>
                        <input type="text" class="form-control" name="nama_kategori">
                    </div>
                    <div class="form-group">
                      <label for="nama_kategori">Deskripsi Kategori :</label>
                      <textarea type="text" class="form-control" name="deskripsi_kategori"></textarea>
                  </div>
                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </section>
@endsection
