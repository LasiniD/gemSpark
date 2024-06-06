<?php

namespace App\Http\Controllers\Auth;

use App\Models\Colour;
use App\Models\Shape;
use App\Models\Type;

class HomeShapeController
{
    public function index()
    {
        $gems = \App\Models\Gem::all();
        $type = Type::all();
        $colour = Colour::all();
        $shape = Shape::all();
        return view('pages.homeShape', ['gems' => $gems, 'type' => $type, 'colour' => $colour, 'shape' => $shape]);
    }

    public function show(string $slug) //removed request
    {
        if (!$slug || strlen($slug) < 1) {
            abort(404);
        }

        $shape = Shape::where('slug', $slug)->first();

        if (!$shape) {
            abort(404);
        }

        $gems = $shape->gems;

        return view('pages.singleShape',['shape' => $shape, 'gems' => $gems]);
    }
}
