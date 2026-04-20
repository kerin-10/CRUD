<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\KamarController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/penghuni', [PenghuniController::class, 'index'])->name('penghuni.index');
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
Route::get('/kamar/edit/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
Route::post('/kamar/update/{id}', [KamarController::class, 'update'])->name('kamar.update');
Route::get('/kamar/delete/{id}', [KamarController::class, 'destroy'])->name('kamar.delete');
Route::get('/penghuni/create', [PenghuniController::class, 'create'])->name('penghuni.create');
Route::post('/penghuni/store', [PenghuniController::class, 'store'])->name('penghuni.store');
Route::get('/penghuni/edit/{id}', [PenghuniController::class, 'edit'])->name('penghuni.edit');
Route::post('/penghuni/update/{id}', [PenghuniController::class, 'update'])->name('penghuni.update');
Route::delete('/penghuni/{id}', [PenghuniController::class, 'destroy'])->name('penghuni.destroy');