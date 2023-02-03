@extends('layout.layout')
@section('container')
<br><br><br><br>
<div class="title">
    <h1>BEBERES RUMAH</h1>
</div>
<div class="ucapan">
    <h1>Selamat Datang Di Website Kami</h1>
    <h2>Salam Bersih!</h2>
</div>
<div class="cewek">
    <img src="img/cewek.png" alt="">
</div>
<div class="sampah">
    <img src="img/sampah.png" alt="">
</div>
<div class="logo">
    <img src="img/logo.png" alt="">
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@foreach ($produk as $a )
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                <div class="card text-black">
                    <img src="{{ asset('storage/' . $a->image_produk) }}" class="card-img-top" alt="iPhone" />
                    <div class="card-body">
                        <div class="text-center mt-1">
                            <h4 class="card-title">{{ $a->nama_produk }}</h4>
                            <h6 class="text-primary mb-1 pb-3">{{ $a->deskripsi }}</h6>
                            <span>{{ $a->harga_produk }}</span>
                        </div>
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-danger flex-fill ms-1"> <a href="/addorder">Beli
                                    Sekarang</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
