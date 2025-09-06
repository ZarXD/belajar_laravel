<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',  function () {
    return "Hello World!";
});

Route::get('/nama', function () {
    return "Nama saya : izaa";
});

Route::get('/test', function ($id) {
    return "test";
});