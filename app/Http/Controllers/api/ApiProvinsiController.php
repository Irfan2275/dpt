<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinsiResource;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ApiProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $provinsis = Provinsi::all();
        return ProvinsiResource::collection($provinsis);
    }

    /**
     * Display the specified resource.
     */
    public function show($nama_provinsi)
    {
        //
        $provinsi = Provinsi::where('nama_provinsi', $nama_provinsi)->first();

        if ($provinsi) {
        return ProvinsiResource::collection([$provinsi]);
        } else {
        return response()->json(['Provinsi tidak ditemukan'], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
