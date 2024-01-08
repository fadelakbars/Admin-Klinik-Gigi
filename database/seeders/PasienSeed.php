<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasien')->insert([
                'created_at'=>date('Y-m-d H:i:s'),
                'nama'=>'Fadhel',
                'umur'=>'20',
                'jenis-kelamin'=>'Laki-laki',
                'alamat'=>'Maggenrang',
                'tgl-kunjungan'=>date('Y-m-d'),
                'diagnosa'=>'Pembersihan karang gigi',
                'terapi'=>'asdfasdf',
                'keterangan'=>'asdfasdf',
                'biaya'=>'20000',
            ]);
    }
}
