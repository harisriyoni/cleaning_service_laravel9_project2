@extends('layout.layout')
@section('container')
<br><br><br>
<form method="POST" action="/addorder/store" enctype="multipart/form-data">
    @csrf
    <br>
    <div>
        <label for="alamat_tujuan">Alamat yang Dituju:</label>
        <input type="text" name="alamat_tujuan" value="">
        <br><br><br>
        @foreach ($produk as $a )
        <label>
            <input type="radio" name="paket" value="{{ $a->nama_produk }}">
            <img src="{{ asset('storage/' . $a->image_produk) }}" alt="{{ $a->nama_produk }}" width="100"
                height="100"><br>
            <h4>Nama Produk</h4>
            <p>{{ $a->nama_produk }}</p><br>
            <input type="radio" id="paket" name="paket" value="{{ $a->nama_produk }}" hidden>
            <h4>Harga Produk</h4>
            <p>{{ $a->harga_produk }}</p><br>
            <input type="text" id="harga" name="harga" value="{{ $a->harga_produk }}" hidden><br>
            <h5>Deskripsi</h5>
            <p>{{ $a->deskripsi}}</p>
            <input type="text" id="deskripsi_order" name="deskripsi_order" value="{{ $a->deskripsi }}" hidden>
        </label>
        @endforeach
        <br>
        <select name="pilih_pembayaran">
            <option value="Tranfer">Transfer</option>
            <option value="COD">COD</option>
        </select><br>
        <div class="form-group">
            <label for="image">Upload bukti Tranfer jika memilih transfer:</label><br>
            <label for="image">Jika COD Foto Rumah dan Lampirkan foto di bawah ini:</label><br>
            <input type="file" class="form-control-file" id="image" name="image">
            <br><br><br>
        </div>
        <label for="tanggal">Masukkan Tanggal Dilakukan:</label>
        <input type="date" id="tanggal" name="tanggal">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
