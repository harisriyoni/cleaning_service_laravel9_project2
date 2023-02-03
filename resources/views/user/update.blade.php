@section('container')
<br><br><br><br><br><br><br><br>
<h1>Update DATA</h1>
<form class="my-form" method="POST" action="/profil/edit/{{ $user[0]->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_lengkap">Nama lengkap</label>
        <input class="form-control my-input" type="text" id="nama_lengkap" name="nama_lengkap"
            value="{{ $user[0]->nama_lengkap }}">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input class="form-control my-input" type="text" id="alamat" name="alamat" value="{{ $user[0]->alamat }}">
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input class="form-control my-input" type="text" id="tanggal_lahir" name="tanggal_lahir"
            value="{{ $user[0]->tanggal_lahir }}">
    </div>
    <input class="btn btn-primary my-button" type="submit" value="Update Profil">
</form> @extends('layout.layout')
@endsection
