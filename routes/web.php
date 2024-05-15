<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;
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
    return view('tambah');
});

Route::get('dashboard',[DashboardController::class,'index'])->name('index'); /*DASHBOARD*/

Route::get('/search', [SearchController::class, 'search'])->name('search'); /*ROUTE PENCARIAN/SEARCH */

Route::resource('images', 'ImageController');
Route::get('tambah',[ImageController::class,'img'])->name('img');


