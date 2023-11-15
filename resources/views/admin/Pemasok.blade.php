@extends('layouts.index')

@section('JudulHalaman','Pemasok Obat')
@section('PageAcces', 'Pemasok Obat')

@section('PemasokObat')
    <section class="content">
        <div class="container-fluid">
            <div class="mt-1 my-3 p-4 bg-body rounded shadow-sm">
                <h1 class="mb-4">Pemasok</h1>
                <!-- Form Tambah Data -->
                <form method="POST" action="{{ route('InputPemasok') }}">
                    @csrf
                    <div class="form-group">
                        <label for="pemasok_obat">Pemasok :</label>
                        <input type="text" class="form-control" name="PemasokObat">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pemasok">Alamat :</label>
                        <textarea type="text" class="form-control" name="AlamatPemasok"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No Telepon :</label>
                        <input type="number" class="form-control" name="NoTelepon">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
@endsection