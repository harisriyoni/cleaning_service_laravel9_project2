@extends('layout.layout')
@section('container')
<br><br><br><br><br><br>
<form action="/register/store" method="post" class="mx-auto mt-5 col-md-6">
    <h1 class="text-center">Please Register</h1>
    @csrf
    <div class="form-group">
        <input type="number" class="form-control" name="role_id" value="2" hidden required>
    </div>
    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label for="no_hp">Nomer HP</label>
        <input type="text" class="form-control" name="no_hp">
    </div>
    <div class="form-group">
        <label for="no_ktp">Nomer KTP</label>
        <input type="text" class="form-control" name="no_ktp">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat lengkap</label>
        <input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
@endsection
