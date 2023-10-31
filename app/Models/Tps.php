<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tps extends Model
{
    use HasFactory, HasUuids;
    protected $tabel = ['tps'];
    protected $fillable = [
        'kode_tps', 'nama_tps', 'nama_desa', 'nomor_tps', 'keterangan', 'kode_dagri_provinsi', 'kode_dapil_ri', 'kode_dagri_kabupaten_kota', 'kode_dagri_kecamatan', 'kode_dagri_desa_kelurahan'
    ];

    public function Dpt()
    {
        return $this->hasMany(Dpt::class); 
    }
}
