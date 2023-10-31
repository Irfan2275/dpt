<?php

namespace App\Http\Controllers;

// use App\Models\Dpt;
use App\Models\Tps;
use Illuminate\Http\Request;
// use App\Models\Desa_kelurahan;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TpsController extends Controller
{
    //
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $tps = Tps::get();

            return DataTables::of($tps)
                ->make();
             
        }

        return view('tps');
    }

    
}
