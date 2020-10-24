@extends('layouts/main')

@section('title', 'Create Article')

@section('header', 'Create Article')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card mb-3">
                        <div class="card-body">
                            <form action="/store" method="post">
                                @csrf
                                <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Add title" name="title">
                                        </div>
                                        <label for="article">Article</label><br>
                                    <textarea name="Article" id="article" cols="94" rows="10"></textarea><br>
                                <label for="Kategories">Categories</label>
                                    <select class="form-control" id="Kategories" name="select">
                                    @foreach($Kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->Kategori }}</option>
                                    @endforeach
                                    </select>
                                <button type="submit" class="btn btn-primary float-right mt-5">Upload</button>
                                </div>
                            </form>
                        <a href="/article"><button class="btn btn-dark">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection