<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->integer('umur');
            $table->string('jenis-kelamin');
            $table->text('alamat');
            $table->date('tgl-kunjungan');
            $table->text('diagnosa');
            $table->text('terapi');
            $table->text('keterangan');
            $table->integer('biaya');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
