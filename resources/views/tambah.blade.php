<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="gambar">
    <input type="text" name="deskripsi" placeholder="Deskripsi Gambar">
    <button type="submit">Upload</button>
</form>
