<?php

namespace App\Http\Requests\Auth\Gems;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3','max:255','string'],
            'type' => ['required'],
            'colour' => ['required'],
            'shape' => ['required'],
            'c_weight' => ['required'],
            'price' => ['required'],
            'file' => ['required','image'],
            'stock' => ['required','min:0'],
            'min_stock' => ['required','min:1'],
            'from' => ['required'],
            'slug' => ['required','unique:gems,slug']
        ];
    }
}
