@extends('layouts/main')

@section('title', 'article')

@section('header', 'Article')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->judul}}</h5>
                    <p class="card-text">{{$article->Article}}</p>
                    <p class="card-text">{{$article->kategori}}</p>
                    <a href="/article"><button class="btn btn-dark">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection