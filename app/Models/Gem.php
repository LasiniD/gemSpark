<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'where_from',
        'carat_weight',
        'stock',
        'min_stock',
        'is_available',
        'slug',
        'type_id',
        'color_id',
        'shape_id',
    ];
}
