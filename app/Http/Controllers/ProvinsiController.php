<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Models\Desa_kelurahan;
use App\Models\Kabupaten_kota;
use App\Http\Controllers\Controller;
use App\Models\Tps;

class ProvinsiController extends Controller
{
    //
    public function index()
    {
        $provinsis = Provinsi::all();
        return view('provinsi', compact('provinsis'));
     }

     public function kabkot(Request $request, $kode_provinsi)
     {
        $provinsi = Provinsi::where('kode_provinsi', $kode_provinsi)->first();
        $kabupaten_kotas = Kabupaten_kota::where('kode_provinsi', $kode_provinsi)->get();
       // $kabupaten_kotas = Kabupaten_kota::all();
        return view('kabkota', compact('provinsi','kabupaten_kotas', 'kode_provinsi'));
      //   return view('kabkota', compact('kabupaten_kotas'));
     }
    
     public function kecamatan(Request $request, $kode_kabupaten_kota)
     {
        $kabupaten_kota = Kabupaten_kota::where('kode_kabupaten_kota', $kode_kabupaten_kota)->first();
        $kecamatans = Kecamatan::where('kode_kabupaten_kota', $kode_kabupaten_kota)->get();
        return view('kecamatan', compact('kecamatans','kabupaten_kota','kode_kabupaten_kota'));
     }

     public function desakel(Request $request, $kode_kecamatan)
     {
        $kecamatan = Kecamatan::where('kode_kecamatan', $kode_kecamatan)->first();
        $desa_kelurahans = Desa_kelurahan::where('kode_kecamatan', $kode_kecamatan)->get();
        return view('desakel', compact('desa_kelurahans','kecamatan','kode_kecamatan'));
     }

     public function tps(Request $request, $kode_desa_kelurahan)
     {
        $desa_kelurahan = Desa_kelurahan::where('kode_desa_kelurahan', $kode_desa_kelurahan)->first();
        $tps = Tps::where('kode_desa_kelurahan', $kode_desa_kelurahan)->get();
        return view('tpsshow', compact('tps','desa_kelurahan','kode_desa_kelurahan'));
     }
}
