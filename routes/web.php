<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// baris kode lain

Route::resource('/kategori', KategoriController::class);
Route::resource('/daftarmenu', DaftarMenuController::class);
Route::resource('/laporan', LaporanController::class);

Route::get('/', function() { return view('welcome'); } )->name('index');
