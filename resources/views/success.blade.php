@extends('layouts.mainLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-page">
                    <h2>Success!</h2>
                    <p>Your order has been placed successfully.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
