@extends('layouts.mainLayout')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="font-serif main-topic">Gem Spark</h1>
                        <p class="font-serif">EXQUISITE GEM MARKETPLACE</p>
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

                    {{--<div class="text-center">
                        <ul class="pagination post-pagination">
                            <li><a href="#">Prev</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">Next</a>
                            </li>
                        </ul>
                    </div>--}}

                </div>

                <x-right-menu></x-right-menu>

            </div>
        </div>
    </div>

@endsection
