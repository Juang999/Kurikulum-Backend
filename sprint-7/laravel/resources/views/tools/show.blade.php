    @extends('layouts/app')

    @section('title', 'detail')

    @section('tulisan', 'Detail Santri')


    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-6">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$student->Nama}}</h5>
                            <p class="card-text">{{$student->Divisi}}</p>
                            <p class="card-text">{{$student->Asal}}</p>
                            <a href="{{$student->id}}/edit" class="btn btn-primary">edit</a>
                            <form action="{{ $student->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">hapus</button>
                            </form>
                            <button type="submit" class="btn btn-dark">kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection