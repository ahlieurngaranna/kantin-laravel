<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Hubungkan file CSS terpisah -->
</head>
<body>
    <div class="container">
        <h1>Daftar Barang</h1>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $item)
                    <tr>
                        <td>{{ $item->nama_barang }}</td>
                        <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="Gambar Barang">
        </td>

                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('barang.create') }}" class="add-button">Tambah Barang Baru</a>
    </div>
</body>
</html>
