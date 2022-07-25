<?php
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk', 'index')->name('produk');
    Route::post('/produk-store', 'store')->name('produk-store');
    Route::post('/produk-update', 'update')->name('produk-update');
    Route::post('/produk-hapus', 'destroy')->name('produk-hapus');
});
Route::controller(KategoriProdukController::class)->group(function () {
    Route::get('/kategori-produk', 'index')->name('kategori-produk');
    Route::post('/kategori-store', 'store')->name('kategori-store');
    Route::post('/kategori-update', 'update')->name('kategori-update');
    Route::post('/kategori-hapus', 'destroy')->name('kategori-hapus');
});
Route::controller(AlamatController::class)->group(function () {
    Route::get('/alamat', 'index')->name('alamat');
});
