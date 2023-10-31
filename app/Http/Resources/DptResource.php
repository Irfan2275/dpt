<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DptResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid' =>$this->id,
            'Kecamatan' =>  $this->kecamatan->nama_kecamatan,
            'Desa/Kelurahan' => $this->desa_kelurahan,
            'TPS' => $this->tps->nama_tps,
            'Nama' => $this->nama,
            'Usia' => $this->usia,
            'status' => $this -> status
        ];
    }
}
