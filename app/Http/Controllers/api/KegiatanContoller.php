<?php

namespace App\Http\Controllers\api;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KegiatanResource;

class KegiatanContoller extends Controller
{
    //
    public function index()
    {
        $kegiatans = Kegiatan::all();
// dd($kegiatans);
        return KegiatanResource::collection($kegiatans);
    }
}
