<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::get('/daftar-pasien', function () {
    return view('daftar-pasien');
});

Route::get('/detail-pasien', function () {
    return view('detail-pasien');
});

Route::get('/edit-pasien', function () {
    return view('edit-pasien');
});

Route::get('/ekspor-data', function () {
    return view('ekspor-data');
});


