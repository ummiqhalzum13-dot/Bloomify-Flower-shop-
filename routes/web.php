<?php

use App\Http\Controllers\BloomifyController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Utama Katalog Bunga (Menggunakan nama rute 'list')
Route::get('/', [BloomifyController::class, 'index'])->name("list");

// 2. Halaman Tentang Toko Bunga (Bloomify.about)
Route::get('/about', [BloomifyController::class, 'about'])->name("Bloomify.about");

// 3. Proses Tambah Data Bunga (Menggunakan B besar)
Route::get('/Create', [BloomifyController::class, 'create'])->name("Bloomify.create");
Route::post('/Create', [BloomifyController::class, 'store'])->name("Bloomify.store");

// 4. Proses Tampil Detail, Edit, Update, dan Hapus Bunga (Menggunakan B besar)
Route::get('/show/{id}', [BloomifyController::class, 'show'])->name("Bloomify.show");
Route::get('/edit/{id}', [BloomifyController::class, 'edit'])->name("Bloomify.edit");
Route::put('/edit/{id}', [BloomifyController::class, 'update'])->name("Bloomify.update");
Route::delete('/destroy/{id}', [BloomifyController::class, 'destroy'])->name("Bloomify.destroy");

// Menghidupkan otomatis jalur CRUD (index, create, store, edit, update, destroy)
Route::resource('Pelanggan', PelangganController::class);
Route::resource('Supplier', SupplierController::class);
Route::resource('Pesanan', PesananController::class);