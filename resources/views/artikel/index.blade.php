@extends('layouts.master')

@section('title-page','Artikel')

@section('content')
      @if (session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }} 
        </div>
      @elseif (session('edit'))
        <div class="alert alert-warning text-center" role="alert">
            {{ session('edit') }}
        </div>
      @elseif (session('destroy'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session('destroy') }} 
        </div>
        @elseif (session('contohuser'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session('contohuser') }} 
        </div>
      @endif

<table class="table table-bordered">
  <thead>
    <tr class="text-dark text-center">
      <th scope="col" style="width: 1rem;">No</th>
      <th scope="col" style="width: 12rem;">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col" style="width: 4rem;">Action</th>
      <th scope="col" style="width: 12rem;">Slug</th>
      <th scope="col" style="width: 10rem;">Tag</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $datas as $key => $data)
        <tr>
        <th scope="row" class="text-dark">{{$key+1}}</th>
        <td>{{$data->judul}}</td>
        <td>{{$data->isi}}</td>
        <td>
            <a href="/artikel/{{$data->id}}" class="badge badge-primary p-2">Detail</a>
            <a href="/artikel/{{$data->id}}/edit" class="badge badge-warning p-2">Edit</a>
            <form action="/artikel/{{$data->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="badge badge-danger p-2">Hapus</button>
            </form>
        </td>
        <td>{{$data->slug}}</td>
        <td>{{$data->tag}}</td>
        </tr>
    @endforeach
  </tbody>
  <a href="/contohuser" class="badge badge-primary p-3">Klik Satu kali saja untuk buat 5 user</a>
</table>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Minus ga sempet buat validation, tampilan alakadarnya :( ga sempet buat contoh artikel. semua artikel defaultnya ke user id 1',
        icon: 'success',
        confirmButtonText: 'Thanks'
    })
</script>
@endpush