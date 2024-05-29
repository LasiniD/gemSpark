<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function gems()
    {
        return $this->hasMany(Gem::class);
    }
}
