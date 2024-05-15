<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang; // Ganti YourModel dengan model yang ingin Anda cari

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian di model Anda
        $results = barang::where('field', 'like', "%$query%")->get();

        return view('search-results', ['results' => $results]);
    }
}
