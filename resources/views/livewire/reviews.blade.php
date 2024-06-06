<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <form class="py-2 px-4" wire:submit.prevent="store" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                        @csrf
                        <h3 class="review-box">Review</h3>
                        <div class="form-group-row">
                            {{--<input type="" wire:model="rating">--}}
                            <input type="hidden" name="rating">
                            <div class="col">
                                <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5" wire:model="rating"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="rating" value="4" wire:model="rating"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3" wire:model="rating"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2" wire:model="rating"/>
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1" wire:model="rating"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <div class="col">
                                <textarea class="form-control" name="comment" wire:model="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                            </div>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-sm py-2 px-3 btn-info" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>

