<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Import namespace model Image

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
{
    // Validasi input gambar
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        'deskripsi' => 'required|string',
    ]);

    // Simpan gambar ke dalam penyimpanan
    $gambarPath = $request->file('gambar')->store('public/images');

    // Ubah path penyimpanan agar bisa diakses publik
    $gambarPath = str_replace('public/', 'storage/', $gambarPath);

    // Simpan data gambar ke dalam database
    Image::create([
        'gambar' => $gambarPath,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('images.index')->with('success', 'Gambar berhasil ditambahkan.');
}

    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan perbarui gambar dan deskripsi
    }

    public function destroy($id)
    {
        // Hapus gambar dan deskripsi
    }
}
