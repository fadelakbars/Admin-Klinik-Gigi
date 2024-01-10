<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;


Route::get('/', function () {
    return view('form',[
        "title" => "form",
    ]);
});

Route::get('/login', function(){
    return view ('login');
});

Route::get('/daftar-pasien', [PasienController::class , 'index'] );

Route::get('/detail-pasien/{nama}-{id}', [PasienController::class, 'detail']);

Route::get('/edit-pasien', function () {
    return view('edit-pasien',[
        "title" => "edit-pasien"
    ]);
});

Route::get('/ekspor-data', [PasienController::class , 'ekspor'] );

