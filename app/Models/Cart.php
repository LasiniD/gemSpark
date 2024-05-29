<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_count',
        'sub_total',
        'shipping_total',
        'total',
        'is_paid',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function gem()
    {
        return $this
            ->belongsToMany(Gem::class);
            /*->using(CartProduct::class)
            ->withPivot([
                'quantity',
                'tax',
                'discount',
                'price',
            ]);*/
    }
}
