<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',  function () {
    return "Hello World!";
});

Route::get('/nama', function () {
    return "Nama saya : izaa";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::get('/kelas', [KelasController::class, 'index']);
Route::post('/kelas', [KelasController::class, 'store']);