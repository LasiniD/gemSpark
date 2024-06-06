@extends('layouts.mainLayout')

@section('content')
    {{--<livewire:viewCart :cart="$cart"/>--}}

    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-table-div">
                        <table class="cart-table">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3">Product</th>
                                <th scope="col" class="px-6 py-3"></th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                {{--<th scope="col" class="px-6 py-3">Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td><img src="{{ $cart->gem->getFirstMediaUrl('images') }}" alt="product" width="200px"></td>
                                        <td>{{ $cart->gem->name }}</td>
                                        <td>LKR {{ number_format($cart->gem->price,2) }}</td>
                                        <td>{{--{{ $cart->quantity }}--}}1</td>
                                        <td>LKR {{ number_format($cart->total,2) }}</td>
                                        {{--<td>
                                            <form action="{{ route('cart.remove',[$cart->gem->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>--}}
                                    </tr>
                            </tbody>
                        </table>
                        <div class="submit-button">
                            <form action="{{ route('session') }}" method="POST">
                                @csrf
                                <input type="hidden" name="products" value="{{ json_encode($cart->gem) }}">
                                {{--{{ dd(json_encode($cart->gem)) }}--}}
                                <button type="submit" class="checkout-button"><i class="fa fa-money-bill"></i>Check Out</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
