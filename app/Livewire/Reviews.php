<?php

namespace App\Livewire;

use App\Http\Requests\CreateReviewRequest;
use App\Models\Review;
use Livewire\Component;

class Reviews extends Component
{
    public function render()
    {
        return view('livewire.reviews');
    }

    public function store(CreateReviewRequest $request)
    {
        /*$this->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);*/

        $review = Review::create([
            'review' => $request->review,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'user_id' => auth()->id(),
            'gem_id' => $request->gem->id,
        ]);

        $this->rating = '';
        $this->comment = '';

        session()->flash('message', 'Review added successfully.');
    }
}
