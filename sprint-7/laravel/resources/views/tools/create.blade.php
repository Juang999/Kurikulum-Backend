@extends('layouts/app')

@section('title', 'detail')

@section('tulisan', 'Tambah Daftar Santri')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
            
                <form method="post" action="/students">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="Nama" value={{ old('Nama') }}>
                        @error('Nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <input type="text" class="form-control @error('Divisi') is-invalid @enderror" id="divisi" placeholder="Masukkan Divisi" name="Divisi" value={{ old('Divisi') }}>
                        @error('Divisi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="asal">Asal</label>
                        <input type="text" class="form-control @error('Asal') is-invalid @enderror" id="asal" placeholder="Masukkan Asal Kota" name="Asal" value={{ old('Asal') }}>
                        @error('Asal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection