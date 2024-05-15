<!-- Tampilan hasil pencarian -->
<h1>Hasil Pencarian</h1>

@foreach($results as $result)
    <p>{{ $result->field }}</p> <!-- Ganti field dengan atribut yang ingin ditampilkan -->
@endforeach
