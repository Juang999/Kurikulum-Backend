@extends('layouts/main')

@section('title', 'result')

@section('header', 'result')

@section('content')
@foreach($hasil as $result)
<div class="container mt-5">
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$result->judul}}</h5>
            <p class="card-text">{{$result->Article}}</p>
        <a href="/detail{{$result->id}}" class="btn btn->primary">Read More</a>
    </div>
</div>
</div>
@endforeach
<div class="container">
<a href="/article" class="btn btn-dark">Back</a>
</div>
@endsection