<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten_kota extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = [
        'id', 'kode_provinsi', 'kode_kabupaten_kota', 'nama_kabupaten_kota'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kode_provinsi', 'kode_provinsi');
    }

    public function Kecamatan()
    {
        return $this->hasMany(Kecamatan::class); 
    }
    public function Desa_kelurahan()
    {
        return $this->hasMany(Desa_kelurahan::class); 
    }
    public function Tps()
    {
        return $this->hasMany(Tps::class); 
    }

    public function Dpt()
    {
        return $this->hasMany(Dpt::class); 
    }
}
