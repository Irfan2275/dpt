<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten_kota;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    //
    public function index()
     {
        $kabupaten_kota = Kabupaten_kota::all();
        // dd($location);
        // dd('coba');
        return view('wilayah', compact('kabupaten_kota'));
     }
}
