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
        Schema::create('kabupaten_kotas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('provinsi_id')->references('id')->on('provinsis')->constrained()
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_dagri_provinsi');
            $table->integer('kode_dagri_kabupaten_kota');
            $table->string('nama_dagri_kabupaten_kota');
            $table->integer('kode_bps_kabupaten_kota');
            $table->string('nama_bps_kabupaten_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('kabupaten_kotas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
