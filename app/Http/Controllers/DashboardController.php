<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa_kelurahan;
use App\Models\Kecamatan;
use App\Models\Tps;

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
    $totalDpt = 0; // Variabel untuk menyimpan total DPT

    foreach ($dptsByKecamatan as $dptByKecamatan) {
        $kecamatan = Kecamatan::where('kode_kecamatan', $dptByKecamatan->kode_kecamatan)->first();

        // Menghitung jumlah desa kelurahan berdasarkan kode_kecamatan
        $jumlah_desa_kelurahan = Desa_kelurahan::where('kode_kecamatan', $kecamatan->kode_kecamatan)->count();

        $totalDpt += $dptByKecamatan->jumlah_dpt; // Menambahkan jumlah DPT ke total

        $kecamatanData[] = [
            'kode_kecamatan' => $dptByKecamatan->kode_kecamatan,
            'nama_kecamatan' => $kecamatan->nama_kecamatan,
            'jumlah_dpt' => $dptByKecamatan->jumlah_dpt,
            'jumlah_desa_kelurahan' => $jumlah_desa_kelurahan,
        ];
    }

    return view('home', compact('kecamatanData', 'totalDpt')); // Mengirim totalDpt ke view
}


public function showDptByKecamatan($kode_kecamatan, $nama_kecamatan)
{
    $dptsByKecamatan = Dpt::select('kode_desa_kelurahan')
        ->selectRaw('COUNT(*) as jumlah_dpt')
        ->where('kode_kecamatan', $kode_kecamatan)
        ->groupBy('kode_desa_kelurahan')
        ->get();

    $desakelurahanData = [];

    foreach ($dptsByKecamatan as $dptByDesaKelurahan) {
        $desa_kelurahan = Desa_kelurahan::where('kode_desa_kelurahan', $dptByDesaKelurahan->kode_desa_kelurahan)->first();
        $jumlah_tps = Tps::where('kode_desa_kelurahan', $desa_kelurahan->kode_desa_kelurahan)->count();
        $desakelurahanData[] = [
            'kode_desa_kelurahan' => $dptByDesaKelurahan->kode_desa_kelurahan,
            'nama_desa_kelurahan' => $desa_kelurahan->nama_desa_kelurahan,
            'jumlah_dpt' => $dptByDesaKelurahan->jumlah_dpt,
            'jumlah_tps' => $jumlah_tps, // Menambah jumlah TPS
        ];
    }

    return view('dptdeskel', compact('desakelurahanData', 'nama_kecamatan'));
}


public function showDptByDesaKelurahan($kode_desa_kelurahan, $nama_desa_kelurahan)
    {
        // Di sini Anda dapat mengambil data DPT berdasarkan kode_desa_kelurahan
        $dpt = Dpt::where('kode_desa_kelurahan', $kode_desa_kelurahan)->get();

        // Kemudian Anda dapat mengirimkan data ini ke tampilan yang sesuai
        return view('dptlist', compact('dpt', 'nama_desa_kelurahan'));
    }

}
