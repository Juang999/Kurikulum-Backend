@extends('layouts/app')

@section('title', 'Students')

@section('tulisan', 'Students')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1>Daftar Santri</h1>
        <a href="/students/create" class="btn btn-primary my-3 @error('Nama') is-ivalid @enderror">Tambah Data Santri</a>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @foreach($Murid as $Santri)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $Santri->Nama }}
                        <a href="/students/{{$Santri->id}}" class="badge badge-primary">detail</a>
                    </li>
                </ul>
                @endforeach
            <a href="/" class="badge badge-dark mt-5">kembali</a>
        </div>
    </div>
</div>
@endsection