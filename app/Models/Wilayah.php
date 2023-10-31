<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = '2023_location';
    protected $fillable = [
        'id', 'code', 'parent', 'level', 'name', 'province_code', 'city_code', 'district_code', 'village_code'
    ];
}
