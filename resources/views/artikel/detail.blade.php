@extends('layouts.master')

@section('title-page','Detail')

@section('content')
<div class="card" style="width: m;">
  <div class="card-body">
    <h4 class="card-title">{{$data->judul}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Slug : {{$data->slug}}</h6>
    <p class="card-text">{{$data->isi}}</p>
    
    <?php $tags = explode(' ', $data->tag);?>
    @foreach ($tags as $tag)
    <a href="#" class="badge badge-success p-3">{{$tag}}</a>
    @endforeach
  </div>
</div>
@endsection