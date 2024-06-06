<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'rating' => ['required'],
            'review'=> ['required'],
        ];
    }

}
