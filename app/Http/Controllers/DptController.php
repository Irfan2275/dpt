<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\Tps;
use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use App\Enums\JenisKelaminEnum;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class DptController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dpts = Dpt::select(['id', 'kode_provinsi', 'kode_kabupaten_kota', 'kode_kecamatan', 'kode_desa_kelurahan', 'kode_tps', 'nama', 'jenis_kelamin', 'desa_kelurahan', 'usia','status'])
            ->with('Provinsi');

            return DataTables::of($dpts)
            ->addColumn('jenis_kelamin', function ($dpts) {
                if ($dpts->jenis_kelamin === JenisKelaminEnum::PRIA) {
                    return 'Laki-Laki';
                } elseif ($dpts->jenis_kelamin === JenisKelaminEnum::WANITA){
                    return 'Perempuan';
                }
            })
            ->addColumn('status', function ($dpt) {
            if ($dpt->status === StatusEnum::BUKAN_PENDUKUNG) {
               return '<span class="badge bg-danger">Bukan Pendukung</span>';
            } elseif ($dpt->status === StatusEnum::PENDUKUNG) {
               return '<span class="badge bg-success"> Pendukung</span>';
            }elseif ($dpt->status === StatusEnum::PENDING){
                return '<span class="badge bg-danger">Belum Diisi</span>';
            }
        })
        ->addColumn('kode_provinsi', function ($dpts) {
                return $dpts->Provinsi->nama_provinsi;
        })

        ->addColumn('kode_desa_kelurahan', function ($dpts) {
                return $dpts->Desa_kelurahan->nama_desa_kelurahan;
        })

        ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . route('dpt.edit', ['id' => $row->id]) . '" class="edit btn btn-warning btn-sm">Edit</a> ';
                return $actionBtn;
        })
            ->rawColumns(['kode_provinsi', 'kode_desa_kelurahan', 'jenis_kelamin', 'status', 'action'])
            ->make();
        }
    
        return view('dpt');
    }
    

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $dpts = Dpt::with('Provinsi','Desa_kelurahan','Tps')->latest()->get();

    //         return DataTables::of($dpts)
    //             ->addColumn('kode_provinsi', function ($dpts) {
    //                 return $dpts->Provinsi->nama_provinsi;
    //             })
    //             ->addColumn('kode_desa_kelurahan', function ($dpts) {
    //                 return $dpts->Desa_kelurahan->nama_desa_kelurahan;
    //             })
    //             ->addColumn('kode_tps', function ($dpts) {
    //                 return $dpts->Tps->nama_tps;
    //             })
    //             ->addColumn('jenis_kelamin', function ($dpts) {
    //                 if ($dpts->jenis_kelamin === JenisKelaminEnum::PRIA) {
    //                     return 'Laki-Laki';
    //                 } elseif ($dpts->jenis_kelamin === JenisKelaminEnum::WANITA){
    //                     return 'Perempuan';
    //                 }
    //             })
    //             ->addColumn('status', function ($dpt) {
    //                 if ($dpt->status === StatusEnum::BUKAN_PENDUKUNG) {
    //                    return '<span class="badge bg-danger">Bukan Pendukung</span>';
    //                 } elseif ($dpt->status === StatusEnum::PENDUKUNG) {
    //                    return '<span class="badge bg-success"> Pendukung</span>';
    //                 }elseif ($dpt->status === StatusEnum::PENDING){
    //                     return '<span class="badge bg-danger">Belum Diisi</span>';
    //                 }
    //             })
    //             ->addColumn('action', function ($row) {
    //                 $actionBtn = '<a href="' . route('dpt.edit', ['id' => $row->id]) . '" class="edit btn btn-warning btn-sm">Edit</a> ';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['kode_provinsi','status','jenis_kelamin','action'])
    //             ->make();
             
    //     }

    //     return view('dpt');
    // }

    public function edit($id)
    {
        $dpt   = Dpt::whereId($id)->first();
        return view('dukungan')->with('dpt', $dpt);
    }

   
 
        public function update(Request $request, $id)
        {
            $request->validate([
                'status' => 'required',
            ]);
    
            $dpt = Dpt::find($id);
            $dpt->status = $request->status;
            $dpt->save();
    
            return redirect()->route('dpt.index');
        }
    
 
}
