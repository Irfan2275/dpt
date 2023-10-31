<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'provinsis';
    protected $fillable = [
        'id', 'kode_provinsi', 'nama_provinsi'
    ];

    public function Kabupaten_kota()
    {
        return $this->hasMany(Kabupaten_kota::class); 
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
    public function AnakDapilDprRi()
    {
        return $this->hasMany(AnakDapilDprRi::class); 
    }
    public function Dpt()
    {
        return $this->hasMany(Dpt::class); 
    }
}
