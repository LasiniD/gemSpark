@extends('layouts.mainLayout')

@section('content')
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <x-one-product :gem="$gem"/>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
