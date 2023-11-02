<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa_kelurahan;
use App\Models\Kecamatan;

class DashboardController extends Controller
{
    //
    public function index()
{
    $dptsByKecamatan = Dpt::select('kode_kecamatan')
        ->selectRaw('COUNT(*) as jumlah_dpt')
        ->groupBy('kode_kecamatan')
        ->get();

    $kecamatanData = [];

    foreach ($dptsByKecamatan as $dptByKecamatan) {
        $kecamatan = Kecamatan::where('kode_kecamatan', $dptByKecamatan->kode_kecamatan)->first();
        $kecamatanData[] = [
            'kode_kecamatan' => $dptByKecamatan->kode_kecamatan,
            'nama_kecamatan' => $kecamatan->nama_kecamatan,
            'jumlah_dpt' => $dptByKecamatan->jumlah_dpt,
        ];
    }

    $dptsByDesaKelurahan = Dpt::select('kode_desa_kelurahan')
        ->selectRaw('COUNT(*) as jumlah_dpt')
        ->groupBy('kode_desa_kelurahan')
        ->get();

    $desakelurahanData = [];

    foreach ($dptsByDesaKelurahan as $dptByDesaKelurahan) {
        $desa_kelurahan = Desa_kelurahan::where('kode_desa_kelurahan', $dptByDesaKelurahan->kode_desa_kelurahan)->first();
        $desakelurahanData[] = [
            'kode_desa_kelurahan' => $dptByDesaKelurahan->kode_desa_kelurahan,
            'nama_desa_kelurahan' => $desa_kelurahan->nama_desa_kelurahan,
            'jumlah_dpt' => $dptByDesaKelurahan->jumlah_dpt,
        ];
    }

    return view('home', compact('kecamatanData', 'desakelurahanData'));
}



public function showDptByKecamatan($kode_kecamatan, $nama_kecamatan)
{
    $dpt = Dpt::where('kode_kecamatan', $kode_kecamatan)->get();

    return view('dptkecamatan', compact('dpt', 'nama_kecamatan'));
}

}
