<?php

use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TransaksiController::class, 'index'])->name('landingpage');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/transaksi/status{id}', [TransaksiController::class, 'status'])->name('status');
    Route::controller(ProdukController::class)->group(function () {
        Route::get('/produk', 'index');
        Route::get('/produktambah', 'create');
        Route::get('/produkedit/{id}', 'edit');
        Route::delete('/produkdelete/{id}', 'destroy');
        Route::post('/produksave', 'store');
        Route::post('/produkupdate/{id}', 'update');
    });
    Route::controller(kategoriController::class)->group(function () {
        Route::get('/kategori', 'index');
        Route::get('/kategoritambah', 'create');
        Route::get('/kategoriedit/{id}', 'edit');
        Route::post('/kategorisave', 'store');
        Route::post('/kategoriupdate/{id}', 'update');
        Route::get('/kategoridelete/{id}', 'destroy');
    });
    // Route::get('/transaksi', [TransaksiController::class, 'ListTransaksi'])->name('transaksi');
});



Route::middleware(['auth', 'role:user'])->group(function () {

    Route::get('/order/{id}', [TransaksiController::class, 'orderID'])->name('order');
    Route::post('/transaksi/save', [TransaksiController::class, 'store'])->name('transaksi.tambah');
    Route::get('/upload/{id}', [TransaksiController::class, 'uploadBukti'])->name('upload');
    Route::post('/uploadBukti/{id}', [TransaksiController::class, 'upload'])->name('upload.bukti');
});

Route::middleware(['auth', 'role:admin|user'])->group(function () {
    Route::get('/transaksi', [TransaksiController::class, 'ListTransaksi'])->name('transaksi');
});
