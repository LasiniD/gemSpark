<?php

use function Livewire\Volt\{state, mount};
use App\Models\Cart;

state([
    'gem' => null,
    'cart' => null,
]);

mount(function () {

});

$addToCart = function () {

    if(auth()->guest()){
        return redirect()->route('login');
    }

    // check if the user has an active cart with the status is_paid false
    $cart = Cart::where('user_id', auth()->id())
        ->where('is_paid', false)
        ->first();

    // if not found, create a new cart
    if (!$cart) {
        $cart = Cart::create([
            'user_id' => auth()->id(),
            'is_paid' => false,
            'gem_id' => $this->gem->id
        ]);
    }

    $cart->gem_id = $this->gem->id;

    // calculate the total price of the cart
    $cart->total = $this->gem->price;

    $cart->save();

    // dispatch cart refresh event
    $this->dispatch('cartRefresh');
}

?>


<div class="add-to-cart-container">
    <button wire:click="addToCart" class="add-to-cart">
        Add to Cart
    </button>
</div>
