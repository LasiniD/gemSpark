@extends('layouts.mainLayout')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="h2-badge">Shapes</h1>
                        <p>Gem Spark</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 flex-wrapper">

                    @foreach($shape as $category)
                            <a href="{{ route('homeShape.show',$category->slug) }}">
                                <x-category :category="$category"/>
                            </a>
                    @endforeach

                    {{--<div class="post">
                        <div class="post-media post-thumb">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/mainLayout/images/blog/blog-post-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <h3 class="post-title"><a href="blog-single.html">Two Ways To Wear Straight Shoes</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 20, MAR 2017
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
                                        href="">FASHION</a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                            <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                        </div>
                    </div>
                    <div class="post">
                        <div class="post-media post-thumb">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/mainLayout/images/blog/blog-post-3.jpg') }}" alt="">
                            </a>
                        </div>
                        <h3 class="post-title"><a href="blog-single.html">Making A Denim Statement</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 20, MAR 2017
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
                                        href="">FASHION</a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                            <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                        </div>
                    </div>

                    <div class="post">
                        <h3 class="post-title"><a href="blog-single.html">Standard Text Post</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 20, MAR 2017
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
                                        href="">FASHION</a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                            <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                        </div>
                    </div>
                    <div class="post">
                        <div class="post-media post-media-audio">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true" class="DRAGDIS_iframe"></iframe>
                        </div>
                        <h3 class="post-title"><a href="blog-single.html">Standard Audio Post</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 20, MAR 2017
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
                                        href="">FASHION</a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                            <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                        </div>
                    </div>
                    <div class="post">
                        <div class="post-media post-media-audio">
                            <iframe height="400" src="https://youtu.be/n3Xv_g3g-mA"  allowfullscreen></iframe>
                        </div>
                        <h3 class="post-title"><a href="blog-single.html">Standard Video Post</a></h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 20, MAR 2017
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
                                        href="">FASHION</a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                            <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
                        </div>
                    </div>--}}

                </div>

                <x-right-menu></x-right-menu>

            </div>
        </div>
    </div>

@endsection
