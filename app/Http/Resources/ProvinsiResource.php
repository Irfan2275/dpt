<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinsiResource extends JsonResource
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
            'kode_provinsi' => $this->kode_provinsi,
            'nama_provinsi' => $this->nama_provinsi
        ];
    }
}
