<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampGear extends Model
{
    use HasFactory;

    protected $table = 'camp_gears';

    protected $fillable = [
        'name',
        'category',
        'rent_price',
        'stock',
        'image',
        'description',
    ];
}