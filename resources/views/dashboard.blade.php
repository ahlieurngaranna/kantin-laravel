<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Kantin App</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/ikonkantin.jpg') }}" alt="Logo Kantin" class="image">
        <nav>
            <a href="{{ route('barang.create') }}">Tambah Barang</a>
        </nav>
    </header>
    
    <main>
        <hr class="garis">
        <section class="menu-wrapper">
            <h3>DAFTAR MENU</h3>
            {{-- <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Look for the Menu...">
                <button type="submit">Search</button>
            </form> --}}
        </section>

        <section class="menulist">
            @foreach($barang as $item)
                <div class="menu-item">
                    <a href="{{ route('barang.show', $item->id) }}">
                        <img src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->nama_barang }}" class="ukurangambarmenu">             
                    <h3>{{ $item->nama_barang }}</h3>
                    </a>
                    <p>Harga: {{ $item->harga }}</p>
                    
                </div>
            @endforeach
        </section>

        <!-- Tambahkan konten lainnya di sini -->
    </main>
    
    <footer class="footer">
        <p>&copy; {{ date('Y/m/d') }} Kantin App</p>
        <!-- Tambahkan informasi footer lainnya di sini -->
    </footer>
</body>
</html>
