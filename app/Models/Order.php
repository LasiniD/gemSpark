<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',

        'shipping_first_name',
        'shipping_last_name',
        'shipping_address',
        'shipping_post_code',
        'shipping_city',
        'shipping_district',
        'shipping_phone',
        'shipping_mobile',

        'billing_first_name',
        'billing_last_name',
        'billing_address',
        'billing_post_code',
        'billing_city',
        'billing_district',
        'billing_phone',
        'billing_mobile',
        'payment_status',
        'shipping_status',

        'delivery_method',
        'payment_method',
        'shipping_total',
        'total',
    ];

    /**
     * Get the user associated with the model.
     *
     * @return BelongsTo
     */
    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the cart associated with the model.
     *
     * @return BelongsTo
     */
    protected function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
