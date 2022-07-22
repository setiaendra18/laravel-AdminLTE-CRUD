<?php

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;



Route::controller(ProdukController::class)->group(function () {
    Route::get('/', 'index')->name('produk');
});

Route::controller(KategoriProdukController::class)->group(function () {
    Route::get('/kategori-produk', 'index')->name('kategori-produk');
});
