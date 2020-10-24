@extends('layouts/main')

@section('title', 'Update Article')

@section('header', 'Update Article')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card mb-3">
                        <div class="card-body">
                            <form action="/update/{{$article->id}}" method="post">
                            @method('patch')
                                @csrf
                                <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" value="{{$article->judul}}" name="title">
                                        </div>
                                        <label for="article">Article</label><br>
                                    <textarea name="Article" id="article" cols="94" rows="10">{{$article->Article}}</textarea><br>
                                <button type="submit" class="badge badge-primary float-right mt-3">Update</button>
                            </form>
                        <a href="/article"><button class="badge badge-dark mt-3">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection