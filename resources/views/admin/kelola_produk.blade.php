@extends('layout.a.part.cont')
@section('content')
<h1>Welcome to data Produk </h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $a )
        <tr>
            <td>{{$a->id}}</td>
            <td><img src="{{ asset('storage/' . $a->image_produk) }}" height="80" width="80"></td>
            <td>{{ $a->harga_produk }}</td>
            <td>{{ $a->nama_produk }}</td>
            <td>{{ $a->deskripsi }}</td>
            <td>
                <a href="kelola_produk/edit/{{ $a->id }}">Edit</a>
            </td>
            <td><a href="kelola_produk/delete/{{ $a->id }}">Delete </a></td>
        </tr>
        @endforeach
    </tbody>
    @endsection
