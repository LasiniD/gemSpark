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

<div>
    {{--<div class="flex justify-between items-center">
        <div class="flex items center">
            --}}{{--<button wire:click="decrement" class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded">
                -
            </button>--}}{{--
            <input type="text" class="px-4 py-2 w-20 bg-gray-200 text-center" value="1">
            --}}{{--<button wire:click="increment" class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded">
                +
            </button>--}}{{--
        </div>
    </div>--}}
    <div class="mt-5">
        <button wire:click="addToCart" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded">
            Add to Cart
        </button>
    </div>

{{--    {{ $cart?->total }}--}}
</div>
