@extends('layouts/app')

@section('title', 'Daftar Santri')

@section('tulisan', 'Daftar Santri')


@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach($Santri as $Daftar)
                    <tbody>
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$Daftar->Nama}}</td>
                            <td>{{$Daftar->Divisi}}</td>
                            <td>{{$Daftar->Asal30}}</td>
                            <td>
                            <a href="#" class="badge badge-success">edit</a>
                            <a href="#" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            <a href="/" class="badge badge-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection