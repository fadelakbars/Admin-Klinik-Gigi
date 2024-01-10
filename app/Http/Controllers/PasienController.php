<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;


class PasienController extends Controller
{
    public function index()
    {
        return view('daftar-pasien', [
            "title" => "daftar-pasien",
            "semua_pasien" => Pasien::all()
        ]);
    }
    public function detail($nama, $id)
    {
        return view('detail-pasien', [
            "title" => "detail-pasien-{nama}",
            "pasien" =>  Pasien::find($id)
        ]);
    }
    public function ekspor()
    {
        return view('ekspor-data', [
            "title" => "ekspor-data",
            "semua_pasien" => Pasien::all()
        ]);
    }
}
