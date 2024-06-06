@extends('layouts.mainLayout')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="h2-badge">Types</h1>
                        <p class="p-badge">{{ $type->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9 flex-wrapper">

                    @foreach($gems as $gem)
                        <x-product :gem="$gem"/>
                    @endforeach


                </div>

                <x-right-menu></x-right-menu>

            </div>
        </div>
    </div>

@endsection
