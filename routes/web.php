<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenghuniController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/penghuni', [PenghuniController::class, 'index']);
Route::get('/penghuni/create', [PenghuniController::class, 'create']);
Route::post('/penghuni/store', [PenghuniController::class, 'store']);
Route::get('/penghuni/edit/{id}', [PenghuniController::class, 'edit']);
Route::post('/penghuni/update/{id}', [PenghuniController::class, 'update']);
Route::delete('/penghuni/{id}', [PenghuniController::class, 'destroy']);