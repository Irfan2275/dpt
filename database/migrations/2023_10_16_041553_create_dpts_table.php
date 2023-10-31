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
        Schema::create('dpts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('provinsi_id')->references('id')->on('provinsis')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_provinsi');
            $table->foreignUuid('dapil_dpr_ri_id')->references('id')->on('dapil_dpr_ris')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dapil');
            $table->foreignUuid('kabupaten_kota_id')->references('id')->on('kabupaten_kotas')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_kabupaten_kota');
            $table->foreignUuid('kecamatan_id')->references('id')->on('kecamatans')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_kecamatan');
            $table->foreignUuid('desa_kelurahan_id')->references('id')->on('desa_kelurahans')->constrained()
            ->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('kode_dagri_desa_kelurahan');
            $table->foreignUuid('tps_id')->references('id')->on('tps')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_tps');
            $table->string('nama');
            $table->string('jenis_kelamin')->default('pending');
            $table->integer('usia');
            $table->string('desa_kelurahan');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('status')->default('bukan pendukung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('dpts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
