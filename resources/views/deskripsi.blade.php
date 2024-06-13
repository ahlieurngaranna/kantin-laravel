    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <center>DAFTAR Barang</center>

        @foreach ($data as $barang)

    {{ $barang->nama_barang }}
    @endforeach
    </body>
    </html>