<?php

namespace App\Http\Requests;

class CreateReviewRequest
{
    public function rules(): array
    {
        return [
            'rating' => ['required'],
            'review'=> ['required'],
        ];
    }

}
