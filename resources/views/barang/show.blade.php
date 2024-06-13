<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link rel="stylesheet" href="{{ asset('css/show.css')}}"> 
</head>
<body>
    <h1>Detail Barang</h1>
    
    <div class="gambar">
        <br>
        <img src="{{ asset('storage/images/' . $barang->image) }}" alt="{{ $barang->nama_barang }}">
    </div>
    <div>
        <label for="nama_barang">Nama Barang:</label>
        <p>{{ $barang->nama_barang }}</p>
    </div>
    
    <div>
        <label for="harga">Harga:</label>
        <p>{{ $barang->harga }}</p>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <p>{{ $barang->stock }}</p>
    </div>
    <div>
        <label for="deskripsi">Deskripsi:</label>
        <p>{{ $barang->deskripsi }}</p>
    </div>
    <a href="{{ route('index') }}">Kembali ke Daftar Menu</a>
</body>
</html>
