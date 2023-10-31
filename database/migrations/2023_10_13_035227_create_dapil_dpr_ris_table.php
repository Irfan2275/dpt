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
        Schema::create('dapil_dpr_ris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('kode_dapil');
            $table->integer('kode_provinsi');
            $table->integer('kode_dagri_provinsi');
            $table->string('nama_dapil');
            $table->integer('jumlah_kursi');
            $table->integer('pemekaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dapil_dpr_ris');
    }
};
