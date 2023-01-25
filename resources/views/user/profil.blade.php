@extends('layout.layout')
@section('container')
<br><br><br><br>
            <h1>Selamat datang di halaman data diri kamu adalah   {{ $user[0]->role->role_name }}   </h1>
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $u )
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->nama_lengkap}}</td>
                <td>{{$u->alamat }}</td>
                <td>{{$u->tanggal_lahir}}</td>
                <td>{{$u->email}}</td>
                <td><a class="btn btn-success" href="profil/edit/{{ $u->id }}">Edit</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
      @endsection

