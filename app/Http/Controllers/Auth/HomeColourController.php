<?php

namespace App\Http\Controllers\Auth;

use App\Models\Colour;
use App\Models\Shape;
use App\Models\Type;

class HomeColourController
{
    public function index()
    {
        $gems = \App\Models\Gem::all();
        $type = Type::all();
        $colour = Colour::all();
        $shape = Shape::all();
        return view('pages.homeColour', ['gems' => $gems, 'type' => $type, 'colour' => $colour, 'shape' => $shape]);
    }

    public function show(string $slug) //removed request
    {
        if (!$slug || strlen($slug) < 1) {
            abort(404);
        }

        $colour = Colour::where('slug', $slug)->first();

        if (!$colour) {
            abort(404);
        }

        $gems = $colour->gems;

        return view('pages.singleColour',['colour' => $colour, 'gems' => $gems]);
    }
}
