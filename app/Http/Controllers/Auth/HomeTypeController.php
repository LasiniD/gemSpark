<?php

namespace App\Http\Controllers\Auth;

use App\Models\Colour;
use App\Models\Shape;
use App\Models\Type;

class HomeTypeController
{
    public function index()
    {
        $gems = \App\Models\Gem::all();
        $type = Type::all();
        $colour = Colour::all();
        $shape = Shape::all();
        return view('pages.homeType', ['gems' => $gems, 'type' => $type, 'colour' => $colour, 'shape' => $shape]);
    }

    public function show(string $slug) //removed request
    {
        if (!$slug || strlen($slug) < 1) {
            abort(404);
        }

        $type = Type::where('slug', $slug)->first();

        if (!$type) {
            abort(404);
        }

        $gems = $type->gems;

        return view('pages.singleType',['type' => $type, 'gems' => $gems]);
    }
}
