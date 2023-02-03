@extends('layout.layout')
@section('container')
<br><br><br><br>
            <h1>Selamat datang di halaman data diri kamu adalah {{ $user[0]->role->role_name }}   </h1>
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
            <tr>
                <td>{{$user[0]->id}}</td>
                <td>{{$user[0]->nama_lengkap}}</td>
                <td>{{$user[0]->alamat }}</td>
                <td>{{$user[0]->tanggal_lahir}}</td>
                <td>{{$user[0]->email}}</td>
                <td><a class="btn btn-success" href="/profil/edit/{{ $user[0]->id }}">Edit</a></td>
              </tr>
        </tbody>
      </table>
      @endsection

