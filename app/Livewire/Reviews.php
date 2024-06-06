<?php

namespace App\Livewire;

use App\Http\Requests\CreateReviewRequest;
use App\Models\Review;
use Livewire\Component;

class Reviews extends Component
{

    public $rating;

    public $comment;

    public $gem;

    public function render()
    {
        return view('livewire.reviews');
    }

    public function store()
    {

        $this->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $review = Review::create([
            'review' => $this->comment,
            'rating' => $this->rating,
            'user_id' => auth()->id(),
            'gem_id' => $this->gem->id,
        ]);

        dd($review);

        $this->rating = '';
        $this->comment = '';

        session()->flash('message', 'Review added successfully.');
    }
}
