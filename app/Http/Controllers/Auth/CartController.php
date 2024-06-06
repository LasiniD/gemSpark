<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        return view('pages.cart', ['cart' => $cart]);
    }

    public function remove(Cart $gemID)
    {
        Cart::removeGem($gemID);
        return redirect()->route('home');
    }
}
