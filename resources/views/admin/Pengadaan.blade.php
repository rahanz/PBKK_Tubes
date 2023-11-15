@extends('layouts.index')

@section('JudulHalaman','Pengadaan Obat')
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
                            @foreach ($data_KategoriObatTable as $dataKategori)                                
                                <option value="{{ $dataKategori->id }}">{{ $dataKategori->kategori}}</option>
                            @endforeach
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
                        <select class="form-control" name="PemasokObat">
                            @foreach ($data_PemasokObatTable as $dataPemasok)                                
                                <option value="{{ $dataPemasok->id }}">{{ $dataPemasok->pemasok_obat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
@endsection
