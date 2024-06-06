<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\View\View;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gem_id',
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
            ->belongsTo(Gem::class);
    }

    //create a function to remove the gem from the cart
    public static function removeGem($gemId): void
    {
        $cart = Cart::where('gem_id', $gemId)->first();
        $cart->delete();

        //if user is in the view cart page then redirect user to home page
        /*if (request()->routeIs('cart')) {
            redirect()->route('home');
        }*/
    }

}
