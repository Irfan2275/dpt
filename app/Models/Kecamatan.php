<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = [
        'id', 'kode_provinsi', 'kode_kabupaten_kota', 'kode_kecamatan', 'nama_kecamatan',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kode_provinsi', 'kode_provinsi');
    }

    public function kabupaten_kota()
    {
        return $this->belongsTo(Kabupaten_kota::class, 'kode_kabupaten_kota', 'kode_kabupaten_kota');
    }

    public function Dpt()
    {
        return $this->hasMany(Dpt::class); 
    }

    public function Desa_kelurahan()
    {
        return $this->hasMany(Desa_kelurahan::class); 
    }
}
