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
        Schema::create('desa_kelurahans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('provinsi_id')->references('id')->on('provinsis')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_provinsi');
            $table->foreignUuid('kabupaten_kota_id')->references('id')->on('kabupaten_kotas')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_kabupaten_kota');
            $table->foreignUuid('kecamatan_id')->references('id')->on('kecamatans')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_kecamatan');
            $table->integer('kode_dagri_desa_kelurahan');
            $table->string('nama_dagri_desa_kelurahan');
            $table->integer('kode_bps_desa_kelurahan');
            $table->string('nama_bps_desa_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('desa_kelurahans');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
