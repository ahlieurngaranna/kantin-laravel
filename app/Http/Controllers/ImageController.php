<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Image; // Import namespace model Image

class ImageController extends Controller
{
    public function uploadGambar(Request $request) {
        if($request->hasFile('gambar')) {
            $folder = 'images';
            $fileName = $request->file('gambar')->hashName();
            $path = Storage::disk('public')->putFileAs($folder, $request->file('gambar'), $fileName);

            return "Gambar berhasil diunggah <br>Lokasi penyimpanan $path dengan nama file $fileName";
        }
    }
}
