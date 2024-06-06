@extends('layouts.mainLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cancel-page">
                    <h2>Order Cancelled!</h2>
                    <p>Sorry! Your order has been cancelled.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
