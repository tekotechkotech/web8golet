<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PortofolioCategoryController;
use App\Http\Controllers\PortofolioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/kategori', [PortofolioCategoryController::class,'index'])->name('kategori');
    Route::get('/kategori/tambah', [PortofolioCategoryController::class,'create'])->name('kategori.tambah');
    Route::post('/kategori/store', [PortofolioCategoryController::class,'store'])->name('kategori.store');
    Route::get('/kategori/edit/{id}', [PortofolioCategoryController::class,'edit'])->name('kategori.edit');
    Route::post('/kategori/update/{id}', [PortofolioCategoryController::class,'update'])->name('kategori.update');
    Route::delete('/kategori/hapus/{id}', [PortofolioCategoryController::class,'destroy'])->name('kategori.hapus');


    Route::get('/portofolio', [PortofolioController::class,'index'])->name('portofolio');
    Route::get('/portofolio/tambah', [PortofolioController::class,'create'])->name('portofolio.tambah');
    Route::post('/portofolio/store', [PortofolioController::class,'store'])->name('portofolio.store');
    Route::get('/portofolio/edit/{id}', [PortofolioController::class,'edit'])->name('portofolio.edit');
    Route::post('/portofolio/update/{id}', [PortofolioController::class,'update'])->name('portofolio.update');
    Route::delete('/portofolio/hapus/{id}', [PortofolioController::class,'destroy'])->name('portofolio.hapus');


    Route::get('/pelanggan', [PelangganController::class,'index'])->name('pelanggan');
    Route::get('/pelanggan/tambah', [PelangganController::class,'create'])->name('pelanggan.tambah');
    Route::post('/pelanggan/store', [PelangganController::class,'store'])->name('pelanggan.store');
    Route::get('/pelanggan/edit/{id}', [PelangganController::class,'edit'])->name('pelanggan.edit');
    Route::post('/pelanggan/edit/update/{id}', [PelangganController::class,'update'])->name('pelanggan.update');
    Route::delete('/pelanggan/hapus', [PelangganController::class,'destroy'])->name('pelanggan.hapus');

});
