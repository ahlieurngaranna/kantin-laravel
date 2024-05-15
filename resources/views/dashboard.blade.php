<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Kantin App</title>
    <img src="{{ asset('images/ikonkantin.jpg') }}" alt="Logo Kantin" class="image">
    
    


    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header>
    <header>
    <a href="{{ route('images.create') }}">Tambah Gambar</a>
</header>

    </header>
    
    <main>
    <hr class="garis">
        <div class="menu-wrapper">
            <h3>MENU LIST</h3>
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Look for the Menu...">
                <button type="submit">Search</button>
            </form> 
        </div>

        <div class="menulist">          
            
                <img src="{{ asset('images/kuebugis.jpg') }}" class="ukurangambarmenu">
                <img src="{{ asset('images/brownies.jpg') }}" class="ukurangambarmenu">
                <img src="{{ asset('images/gehupedas.jpg') }}" class="ukurangambarmenu">
                <img src="{{ asset('images/nasigoreng.jpg') }}" class="ukurangambarmenu">
                <br>                        
                <img src="{{ asset('images/dadargulung.jpg') }}" class="ukurangambarmenu">
                <img src="{{ asset('images/pudding.jpg') }}" class="ukurangambarmenu"> 
                <img src="{{ asset('images/jus.jpg') }}" class="ukurangambarmenu">
                <img src="{{ asset('images/onigiri.jpg') }}" class="ukurangambarmenu">

                
             
        </div>
        
        <!-- Tambahkan konten lainnya di sini -->
    </main>
    
    <footer class="footer">
        <p>&copy; <?php echo date("Y/M/D"); ?> Kantin App</p>
        <!-- Tambahkan informasi footer lainnya di sini -->
    </footer>
</body>
</html>



