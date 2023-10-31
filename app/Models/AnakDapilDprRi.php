<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakDapilDprRi extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
         'dapil_dpr_ri_id', 'kode_dapil', 'provinsi_id', 'kode_dagri_provinsi', 'kabupaten_kota_id', 'kode_dagri_kabupaten_kota', 'kode_kabupaten_kota','nama_kabupaten_kota' 
    ];
}
