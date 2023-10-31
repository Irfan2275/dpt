<?php

namespace App\Models;

use App\Models\Tps;
use App\Models\Provinsi;
use App\Enums\StatusEnum;
use App\Models\Desa_kelurahan;
use App\Enums\JenisKelaminEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

class Dpt extends Model
{
    use HasFactory, HasUuids;
    protected $tabel = 'dpts';
    protected $fillable = [
        'kode_provinsi', 'kode_dapil', 'kode_kabupaten_kota', 'kode_kecamatan',
        'kode_desa_kelurahan', 'kode_tps', 'nama', 'jenis_kelamin', 'usia',
        'desa_kelurahan','rt', 'rw', 'status', 'id' 
    ];
    protected $casts = [
        'jenis_kelamin' => JenisKelaminEnum::class,
        'status' => StatusEnum::class,
        // 'status' => AsEnumCollection::class.':'.StatusEnum::class,
    ];

    public function Provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kode_provinsi', 'kode_provinsi');
    }
    public function Kabupaten_kota()
    {
        return $this->belongsTo(Kabupaten_kota::class, 'kode_kabupaten_kota', 'kode_kabupaten_kota');
    }
    public function Kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kode_kecamatan', 'kode_kecamatan');
    }

    public function Desa_kelurahan()
    {
        return $this->belongsTo(Desa_kelurahan::class, 'kode_desa_kelurahan', 'kode_desa_kelurahan');
    }

    public function Tps()
    {
        return $this->belongsTo(Tps::class, 'kode_tps', 'kode_tps');
    }


}
