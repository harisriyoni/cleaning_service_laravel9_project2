@extends('layout.a.part.cont')
@section('content')
<h1 class="text-dark">Tambah produk</h1>
<form method="POST" action="tambah_produk" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
    </div>
    <div class="form-group">
        <label for="harga_produk">Harga Produk</label>
        <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="RP.">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
    </div>
    <div class="form-group">
        <label for="image_produk">Image Produk</label>
        <input type="file" class="form-control-file" id="image_produk" name="image_produk">
    </div>
    <input type="submit" class="btn btn-primary" value="Tambah produk">
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

@endsection
