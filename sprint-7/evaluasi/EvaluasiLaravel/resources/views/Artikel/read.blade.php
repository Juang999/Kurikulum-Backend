@extends('layouts/app')

@section('title', 'Article')

@section('header', 'Article')


@section('content')
<div class="container">
    <a href="/create"><button class="btn btn-primary my-3">Add Article</button></a>
    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif      
    </div>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
            @foreach($article as $article)
            <div class="card mb-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->judul }}</h5>
                    <p class="card-text">{{ $article->Article }}</p>

                    <a href="/detail/{{ $article->id }}"><button class="btn btn-primary float-left"><i class="fa fa-info"></i></button></a>
                    <a href="/article/{{ $article->id }}/edit" class="btn btn-dark float-right"><i class="fa fa-paint-brush"></i></a>
                    <form action="/delete/{{ $article->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger float-right"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection