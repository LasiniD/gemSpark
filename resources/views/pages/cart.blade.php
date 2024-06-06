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
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        {{ dd($cart) }}
                                        @foreach($cart->items as $item)
                                            {{--<td>{{ $item->gem->name }}</td>
                                            <td>{{ $item->gem->total }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->total }}</td>--}}
                                        @endforeach
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
