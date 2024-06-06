@props([
    'gem'=>null,
    'reviews'=>null
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
        <div class="post-review">
            <livewire:reviews :gem="$gem" />
        </div>

        <div class="post-review-comments">
        @foreach($gem->reviews as $review)
                <div>
                    <h3 class="review-box">{{ $review->user->name }}</h3>
                    <div class="form-group-row">
                        <div class="col">
                            <div class="rated">
                                @for($i=1; $i<=$review->rating; $i++)
                                    {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                    <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                @endfor
                            </div>
                        </div>
                        <br>
                        <div class="col">
                            <p class="" name="comment" rows="6 " placeholder="Comment" maxlength="200">{{ $review->review }}</p>
                        </div>
                        @if(auth()->user()->id == $review->user_id)
                            <div class="col">
                                <a href="{{ route('review.delete',[$review->gem->slug,$review->id]) }}"><button type="button" name="delete" class="button">Delete</button></a>
                            </div>
                        @endif
                    </div>
                </div>
        @endforeach
        </div>
    </div>

@endif
