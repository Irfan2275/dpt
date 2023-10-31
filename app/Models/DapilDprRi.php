<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DapilDprRi extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'kode_dapil', 'kode_provinsi', 'kode_dagri_provinsi', 'nama_dapil', 'jumlah_kursi', 'pemekaran'
    ];
}
