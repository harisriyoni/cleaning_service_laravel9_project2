@extends('layout.layout')
@section('container')
<br><br><br>
    <h1>Welcome to data Order </h1>
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID Order</th>
            <th>Pilihan Paket</th>
            <th>Alamat Yang Dituju</th>
            <th>tanggal</th>
            <th>Harga Paket</th>
            <th>Pembayaran</th>
            <th>Deskripsi Pembayaran</th>
            <th>Bukti transaksi/Foto Rumah</th>
            <th>Status Konfirmasi Order</th>
            <th>Cetak</th>
          </tr>
        </thead>
        <tbody>
<tr><td>
</td></tr>
            @foreach ($user as $u )
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->paket}}</td>
                <td>{{$u->alamat_tujuan }}</td>
                <td>{{$u->tanggal}}</td>
                <td>{{$u->harga}}</td>
                <td>{{$u->pilih_pembayaran}}</td>
                <td>{{$u->deskripsi_order}}</td>
                <td><img src="{{asset('storage/'. $u->image)}}" alt="" width="100" height="100"></td>
                <td>{{$u->status}}</td>
                <td><a class="btn btn-danger" href="order/detail/{{ $u->id }}">Cetak </a>
            </td>
              </tr>
            @endforeach
        </tbody>
      </table>@endsection
