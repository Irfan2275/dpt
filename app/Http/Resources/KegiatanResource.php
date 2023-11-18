<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KegiatanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'nama'=> $this->nama,
            'alamat'=> $this->alamat,
            'jenis_id' => $this->jenis_id,
            'nama jenis' => $this->jenis->nama,
            'relawan_id' => $this->relawan_id,
            'nama relawan' =>  $this->relawan->nama,
            'kode_desa' => $this->kode_desa,
            'nama_dagri_deskel' => $this->desa_kel->nama_dagri_deskel,
            'foto' => $this->foto,
            'latitude' => $this->latitude,
            'longitude'=> $this->longitude
        ];
    }
}
