<?php

namespace App\Http\Controllers\Auth;

use App\Models\Colour;

class HomeColourController
{
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

        return view('pages.homeColour',['colour' => $colour, 'gems' => $gems]);
    }
}
