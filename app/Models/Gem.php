<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'colour_id',
        'shape_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class);
    }

    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
