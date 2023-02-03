<style>
    .invoice-card {
        width: 600px;
        background-color: white;
        padding: 20px;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .invoice-header h3 {
        margin: 0;
    }

    .invoice-header p {
        margin: 0;
        font-size: 12px;
    }

    .invoice-body h4 {
        margin: 20px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #dddddd;
        padding: 8px;
    }
</style>
@extends('layout.layout')
@section('container')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">BEBERES RUMAH INVOICE</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5>From:</h5>
                            <address>
                                BEBERES RUMAH<br>
                                Kabupaten Indramayu,Kuningan<br>
                                Kode Pos: 45255,45556<br>
                                Phone Admin: +6285860149271<br>
                                Email: admin@gmail.com
                            </address>
                        </div>
                        <div class="col-sm-6">
                            <h5>To:</h5>
                            <address>
                                <p><strong> Nama:</strong> <br> {{ $order->gege->nama_lengkap }}</p>
                                <p><strong> Alamat Tujuan:</strong> <br> {{ $order->alamat_tujuan }}</p>
                                <p><strong> Nomer Hanphone:</strong> <br> {{ $order->gege->no_hp }}</p>
                                <p><strong> Email:</strong> <br> {{ $order->gege->email }}</p>
                            </address>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <b>Invoice #ID-{{ $order->id }}</b><br>
                            <br>
                            <b>Pelaksanaan Order:</b> {{ $order->tanggal }}<br>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID order</th>
                                    <th>Paket</th>
                                    <th>Deskripsi</th>
                                    <th>Status Pemesanan</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->paket }}</td>
                                    <td>{{ $order->deskripsi_order }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->harga }}
                                </tr>
                                <td colspan="4"></td>
                                <td class="text-right"><b>Total:</b>{{ $order->harga }}</td>
                                </tr>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-primary" href="/order">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
