@extends('layouts.master')
@section('title-page','Edit')

@section('content')
    <h1>Halaman Edit</h1>
    <form action="/artikel/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul-artikel">Judul Artikel</label>
            <input type="text" class="form-control" id="judul-artikel" aria-describedby="emailHelp" name="judul" value="{{$data->judul}}">
        </div>
        <div class="form-group">
            <label for="isi-artikel">Isi Artikel</label>
            <textarea class="form-control" id="isi-artikel" rows="5" name="isi">{{$data->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" aria-describedby="emailHelp" name="tag"value="{{$data->tag}}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>

@endsection