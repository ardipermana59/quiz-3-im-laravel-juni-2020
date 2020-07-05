@extends('layouts.master')

@section('title-page','create')

@section('content')
    <h1>Form create artikel</h1>

    <form action="/artikel" method="post">
        @csrf
        <div class="form-group">
            <label for="judul-artikel">Judul Artikel</label>
            <input type="text" class="form-control" id="judul-artikel" aria-describedby="emailHelp" name="judul">
        </div>
        <div class="form-group">
            <label for="isi-artikel">Isi Artikel</label>
            <textarea class="form-control" id="isi-artikel" rows="5" name="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" aria-describedby="emailHelp" name="tag">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection