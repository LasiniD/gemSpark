<?php

namespace App\Http\Controllers\Auth;

use App\Models\Type;

class HomeTypeController
{
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

        return view('pages.homeType',['type' => $type, 'gems' => $gems]);
    }
}
