<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // Validasi dan simpan gambar dan deskripsi
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
