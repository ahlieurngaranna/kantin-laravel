<?php

namespace App\Http\Controllers;

use App\Models\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiController extends Controller
{
    public function deskripsi() {
        $data = DB::table('barangs')->get();
        return view('deskripsi', ['data' => $data]);
    }

    public function show($id) {
        $barang = DB::table('barangs')->where('id', $id)->first();
        return view('barang.show', ['barang' => $barang]);
    }


}

