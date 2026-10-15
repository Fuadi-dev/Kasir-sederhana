<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BarangController::class, 'getBarang']);
Route::get('/add-barang', [BarangController::class, 'formBarang']);
Route::post('/post-barang', [BarangController::class, 'postBarang']);
