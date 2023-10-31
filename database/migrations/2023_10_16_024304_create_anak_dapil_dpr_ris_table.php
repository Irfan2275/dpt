<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anak_dapil_dpr_ris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('dapil_dpr_ri_id')->references('id')->on('dapil_dpr_ris')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dapil');
            $table->foreignUuid('provinsi_id')->references('id')->on('provinsis')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_provinsi');
            $table->foreignUuid('kabupaten_kota_id')->references('id')->on('kabupaten_kotas')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_kabupaten_kota');
            $table->integer('kode_kabupaten_kota');
            $table->string('nama_kabupaten_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('anak_dapil_dpr_ris');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
