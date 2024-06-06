@props([
    'gem'=>null
])
@if($gem)
    <div class="post">
        <div class="post-media post-thumb">
            <div class="hover-with">
                <a href="{{ route('home.show',$gem->slug) }}">
                    <img src="{{ $gem->getFirstMediaUrl('images') }}" alt="" class="w-25 h-48">
                </a>
            </div>
            {{--<div class="hide"><a> Add to cart </a><a>VIEW</a></div>--}}
        </div>
        <h3 class="post-title font-serif"><a href="{{ route('home.show',$gem->slug) }}">{{ $gem->name }}</a></h3>
        <div class="post-meta">
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
            <ul>
                <li class="small-label">Carat Weight {{ $gem->carat_weight }}</li>
                <li class="small-label">{{ $gem->where_from }}</li>
            </ul>
            <br>
            <p>LKR {{ number_format($gem->price, 2) }}</p>
        </div>
        <div>
            @livewire('product-add-to-cart', ['gem' => $gem])
        </div>
    </div>
@endif
