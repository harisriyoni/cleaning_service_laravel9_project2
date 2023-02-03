@extends('layout.a.part.cont')
@section('content')
<h1 class="text-dark">Halo</h1>
<h1>Welcome to Info Order </h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID Order</th>
            <th>User</th>
            <th>Paket</th>
            <th>Alamat Tujuan</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Metode Pembayaran</th>
            <th>Terima Order Atau Tidak</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $o )
        <tr>
            <td>{{$o->id}}</td>
            <td>{{$o->users_id}}</td>
            <td>{{$o->paket}}</td>
            <td>{{$o->alamat_tujuan}}</td>
            <td>{{$o->tanggal}}</td>
            <td>{{$o->harga}}</td>
            <td>{{$o->pilih_pembayaran}}</td>
            <td>{{$o->status}}</td>
            <td>
                <form action="order/confirm/{{ $o->id }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Confirm Order</button>
                </form>
                <br>
                <form action="order/reject/{{ $o->id }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject Order</button>
                </form>
                <br>
                <form action="order/pending/{{ $o->id }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Pending Order</button>
                </form>
                <br>
                <a class="btn btn-danger" href="kelola_order/delete/{{ $o->id }}">Delete Order </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
