<?php

// app/Http/Controllers/BarangController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    public function index()
    {
        // Ambil semua data barang dari database
        $barang = Barang::all();

        // Kirim data barang ke dalam view
        return view('index', ['barang' => $barang]);
    }   

    public function create()
    {
        // Tampilkan formulir untuk membuat barang baru
        return view('barang.create');
    }
    // Method lainnya...

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'deskripsi' => 'required|string',
        ]);

        // Simpan barang baru ke dalam database
        Barang::create($validatedData);

        // Redirect ke halaman index barang dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }
}
