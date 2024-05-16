<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\BarangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard',[DashboardController::class,'index'])->name('index'); /*DASHBOARD*/

Route::get('/search', [SearchController::class, 'search'])->name('search'); /*ROUTE PENCARIAN/SEARCH */

Route::post('/images', 'ImageController@store')->name('image.store');
Route::resource('images', 'ImageController');
Route::get('tambah',[ImageController::class,'img'])->name('img');

// Rute untuk menampilkan formulir tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
// Rute untuk menyimpan barang baru ke dalam database
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');



