<?php

namespace App\Http\Controllers\api;

use App\Models\Dpt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DptResource;
// use App\Models\Desa_kelurahan;

class ApiDptController extends Controller
{
    //
    public function index($kode_desa_kelurahan)
    {
        //
        $dpt = Dpt::where('kode_desa_kelurahan', $kode_desa_kelurahan)->paginate(15);

        if ($dpt->isEmpty()) {
        return response()->json(['Daftar Pemilih Tetap tidak ditemukan'], 404);
    }

        return DptResource::collection($dpt);
    }

    public function show ($kode_kecamatan)
    {
        $dpt = Dpt::where('kode_kecamatan', $kode_kecamatan)->paginate(15);

        if ($dpt->isEmpty()) {
            return response()->json(['Daftar Pemilih Tetap tidak ditemukan'], 404);
        }
    
            return DptResource::collection($dpt);
    }
}
