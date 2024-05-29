<?php

namespace App\Http\Controllers\Auth;

use App\Models\Shape;

class HomeShapeController
{
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

        return view('pages.homeShape',['shape' => $shape, 'gems' => $gems]);
    }
}
