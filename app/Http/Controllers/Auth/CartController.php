<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function index($cartID)
    {
        $cart = Cart::where('id', $cartID)->get();
        return view('pages.cart', ['cart' => $cart]);
    }
}
