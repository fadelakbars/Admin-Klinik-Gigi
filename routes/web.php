<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form',[
        "title" => "form",
    ]);
});

Route::get('/login', function(){
    return view ('login');
});

Route::get('/daftar-pasien', function () {
    return view('daftar-pasien',[
        "title" => "daftar-pasien"
    ]);
});
Route::get('/detail-pasien', function () {
    return view('detail-pasien',[
        "title" => "daftar-pasien"
    ]);
});

Route::get('/edit-pasien', function () {
    return view('edit-pasien',[
        "title" => "edit-pasien"
    ]);
});

Route::get('/ekspor-data', function () {
    return view('ekspor-data',[
        "title" => "ekspor-data"
    ]);
});

Route::get('', function () {
    return view('ekspor-data',[
        "title" => "ekspor-data"
    ]);
});


