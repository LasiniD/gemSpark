@props([
    'category'=>null
])
@if($category)
    <div class="post">
        <div class="post-media post-thumb">
            <div class="hover-with">
                <h1 class="font-serif">{{ $category->name }}</h1>
            </div>
            {{--<div class="hide"><a> Add to cart </a><a>VIEW</a></div>--}}
        </div>
        <h3 class="post-title font-serif">{{ $category->name }}</h3>
        {{--<div class="post-meta">
            <ul>
                <li>
                    <a href="{{ route('homeType.show',$gem->type->slug) }}"><i class=""></i>{{ $gem->type->name }}</a>
                </li>
                <li>
                    <a href="{{ route('homeShape.show',$gem->shape->slug) }}"><i class=""></i>{{ $gem->shape->name }}</a>
                </li>
                <li>
                    <a href="{{ route('homeColour.show',$gem->colour->slug) }}"><i class=""></i>{{ $gem->colour->name }}</a>
                </li>
            </ul>
        </div>
        <div class="post-content">
            <p>CARAT WEIGHT {{ $gem->carat_weight }}</p>
            <p><i class="fa fa-diamond"></i> {{ $gem->where_from }}</p>
            <p>Rs {{ $gem->price }} /=</p>
        </div>
        <div>
            @livewire('product-add-to-cart', ['gem' => $gem])
        </div>--}}
    </div>
@endif
