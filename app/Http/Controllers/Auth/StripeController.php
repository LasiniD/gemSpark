<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        //
    }

    public function session(Request $request){

        /*dd(" session");*/

        $details = json_decode($request->input('products'));

        $productItems = [];
        /*$session;*/

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        /*dd($details);*/
            $product_name = $details->name;
            $product_price = $details->price;
            $quantity = "1";

            $two0 = "00";
            $unit_amount = $product_price.$two0;

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    ],
                    'currency'=> 'LKR',
                    'unit_amount' => $unit_amount,
                ],
                'quantity' => $quantity,
            ];



        $checkoutSession = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $productItems,
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'metadata' => ['cart_id' => auth()->user()->id],
            'customer_email' => auth()->user()->email,
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return redirect()->away($checkoutSession->url);

    }

    public function success()
    {
        $user = auth()->user();

        $cart = Cart::where('user_id', $user->id)->where('is_paid',false)->first();

        if($cart){
            $cart->is_paid = true;
            $cart->save();
        }

        return view('success');
    }

    public function cancel()
    {
        return view('cancel');
    }
}
