<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @if(!empty($value->rating))
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <h3>Review</h3>
                    <div class="form-group row">
                        <input type="hidden" name="gem_id" value="{{ $value->id }}">
                        <div class="col">
                            <div class="rated">
                                @for($i=1; $i<=$value->rating; $i++)
                                    {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                    <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col">
                            <p>{{ $value->comments }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <form class="py-2 px-4" wire:submit.prevent="store" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                        @csrf
                        <h3 class="review-box">Review</h3>
                        <div class="form-group-row">
                            <input type="hidden" name="booking_id" value="{{--{{ $value->id }}--}}">
                            <div class="col">
                                <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <div class="col">
                                <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                            </div>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-sm py-2 px-3 btn-info">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
