@extends('layouts.mainLayout')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="font-serif">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="post-single-container">
                            <div class="post-thumb">
                                <img src="{{ asset('assets/mainLayout/images/blog/blog-post-1.jpg') }}" width="300px" height="auto">
                            </div>
                            <div class="post-single-data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
