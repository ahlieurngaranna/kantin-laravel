<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/tambah.css') }}">
</head>

<body>

<header>
   <h1 class="header">TAMBAH BARANG</h1>
   <hr class="garis">
</header>


<!-- resources/views/barang/create.blade.php -->

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang">
    </div>
    <div>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga">
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock">
    </div>
    <div>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"></textarea>
    </div>
    <button type="submit">Tambah Barang</button>
</form>
