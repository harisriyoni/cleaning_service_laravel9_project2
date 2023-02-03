<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        .my-form {
            margin: 20px auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .my-form .form-group {
            margin-bottom: 20px;
        }

        .my-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        .my-form .form-control,
        .my-form .form-control-file {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .my-form .form-control:focus,
        .my-form .form-control-file:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            border-color: #007bff;
        }

        .my-form .my-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .my-form .my-button:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <form class="my-form" method="POST" action="/kelola_produk/edit/{{ $produk->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input class="form-control my-input" type="text" id="nama_produk" name="nama_produk"
                value="{{ $produk->nama_produk }}">
        </div>
        <div class="form-group">
            <label for="harga_produk">Harga Produk</label>
            <input class="form-control my-input" type="text" id="harga_produk" name="harga_produk"
                value="{{ $produk->harga_produk }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input class="form-control my-input" type="text" id="deskripsi" name="deskripsi"
                value="{{ $produk->deskripsi }}">
        </div>
        <div class="form-group">
            <label for="image_produk">Image Produk</label>
            <input class="form-control-file my-input" type="file" id="image_produk" name="image_produk">
        </div>
        <input class="btn btn-primary my-button" type="submit" value="Update Produk">
    </form>
    <a class="btn btn-primary" href="/kelola_produk">Back</a>
</body>

</html>
