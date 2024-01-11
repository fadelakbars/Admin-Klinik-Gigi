<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class PasienController extends Controller
{
    public function index()
    {
        $pasien = DB::table('pasiens')->get();
        return view('daftar-pasien', [
            "title" => "daftar-pasien",
            "semua_pasien" => $pasien
        ]);
    }
    public function detail($nama, $id)
    {
        $pasien = DB::table('pasiens')
            ->where('id', $id)
            ->where('nama', $nama)
            ->first();
        if (!$pasien) {
            abort(404, 'Pasien tidak ditemukan');
        }

        return view('detail-pasien', [
            "title" => "detail-pasien-$nama",
            "pasien" => $pasien
        ]);
    }
    public function ekspor()
    {
        $pasien = DB::table('pasiens')->get();
        return view('ekspor-data', [
            "title" => "ekspor-data",
            "semua_pasien" => $pasien
        ]);
    }
}
