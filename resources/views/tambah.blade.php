<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="string" name="nama_barang" placeholder="Masukan Nama Barang">
    <p>
    <input type="file" name="gambar">
    <p>
    <input type="number" name="harga" placeholder="Masukan Harga">
    <p>
    <input type="number" name="stock" placeholder="Masukan Stock">
    <p>
    <input type="text" name="deskripsi" placeholder="Deskripsi Gambar">
    <button type="submit">Upload</button>
</form>
