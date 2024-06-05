<?php

use App\Models\Cart;
use function Livewire\Volt\{state, mount, on};

state([
    'cart' => null,
    'showCart' => false,
]);

mount(function () {
    if (auth()->user()) {

        $cart = auth()
            ->user()
            ->carts()
            ->where('is_paid', false)
            ->first();

        $this->cart = $cart;
    }

});

$removeProduct = function ($gemId) {
    $cart = $this->cart;

    $cart = Cart::removeGem($gemId);

    $this->cart = $cart;
};

on(['cartRefresh' => function () {
    if (auth()->user()) {
        $cart = auth()
            ->user()
            ->carts()
            ->where('is_paid', false)
            ->first();

        $this->cart = $cart;

        $this->showCart = true;
    }
}]);

/*$handleClick = function () {
    // Perform any actions before redirect (optional)
    return redirect()->route('cart', $this->cart->id);
};*/

?>

<div>
    <div class="relative" x-data="{ open: @entangle('showCart') }">
        <button @click="open = !open">
            <i class="fa fa-shopping-cart"></i>
        </button>
        <div x-show="open" @click.away="open = false"
             class="cart-design">
            <div class="p-4">
                <h3 class="text-lg font-medium text-gray-900">Cart</h3>
                <div class="mt-4">
                    <div class="items center space-y-6">
                        @if(isset($cart))
                            <div class="flex items center">
                                <img src="{{ $cart->gem->getFirstMediaUrl('images') }}" width="100px" height="100px"
                                     class="w-10 h-10 object-cover rounded">
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-900">{{ $cart->gem->name }}</h4>
                                </div>
                                <button wire:click="removeProduct({{ $cart->gem->id }})"
                                        class="ml-auto text-gray-500 hover:text-gray-600">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">
                                Sub total : LKR {{ number_format($cart->total, 2) }}
                            </p>
                            {{--<button class="view-cart" href="">View Cart</button>--}}
                        <a {{--wire:click.prevent="handleClick"--}} href="{{ route('cart',[$cart->id]) }}">
                            <button class="view-cart">View Cart</button>
                        </a>
                            <br>
                            {{--<button class="check-out">Check out</button>--}}
                        @else
                            <p class="text-sm text-gray-500">No items in the cart</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
