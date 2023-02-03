@extends('layout.a.part.cont')
@section('content')
<h1 class="text-dark">Halo</h1>
<h1>Data Pelanggan</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Sebagai</th>
            <th>No HP</th>
            <th>No KTP</th>
            <th>Alamat Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $u )
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->nama_lengkap}}</td>
            <td>{{$u->role->role_name}}</td>
            <td>{{$u->no_hp}}</td>
            <td>{{$u->no_ktp}}</td>
            <td>{{$u->alamat}}</td>
            <td>{{$u->tanggal_lahir}}</td>
            <td>{{$u->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
