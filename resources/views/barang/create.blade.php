<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Barang</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
    <style>
        /* CSS Internal (bisa juga menggunakan file eksternal seperti di atas) */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Create Barang</h1>

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
</body>
</html>
        