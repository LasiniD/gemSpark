@props([
    'gem'=>null
])
@if($gem)
    <div class="post-single-container">
        <div class="post-thumb">
                <a href="{{ route('home.show',$gem->slug) }}">
                    <img src="{{ $gem->getFirstMediaUrl('images') }}" alt="" class="post-single-image">
                </a>
        </div>
        <div class="post-single-data">
            <h1 class="post-title"><a href="{{ route('home.show',$gem->slug) }}">{{ $gem->name }}</a></h1>
            <div class="post-meta-single">
                <ul>
                    <li>
                        <a href="{{ route('homeType.show',$gem->type->slug) }}">Gem Type: {{ $gem->type->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('homeShape.show',$gem->shape->slug) }}">Gem Shape: {{ $gem->shape->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('homeColour.show',$gem->colour->slug) }}">Gem Colour: {{ $gem->colour->name }}</a>
                    </li>
                </ul>
            </div>
            <br>
            <div class="post-content">
                <h3>FROM {{ $gem->where_from }}</h3>
                <p>CARAT WEIGHT : {{ $gem->carat_weight }}</p>
                <h3>LKR {{ number_format($gem->price, 2) }}</h3>
            </div>
            <br>
            <div>
                @livewire('product-add-to-cart', ['gem' => $gem])
            </div>

        </div>
        <livewire:reviews></livewire:reviews>
    </div>
@endif
