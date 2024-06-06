<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Colour;
use App\Models\Shape;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $gems = \App\Models\Gem::all();
        $type = Type::all();
        $colour = Colour::all();
        $shape = Shape::all();
        return view('pages.home', ['gems' => $gems, 'type' => $type, 'colour' => $colour, 'shape' => $shape]);
    }

    public function show(string $id)
    {
        $gem = \App\Models\Gem::where('slug',$id)->first();
        $reviews = $gem->reviews();
        return view('pages.single', ['gem' => $gem, 'reviews' => $reviews]);
    }

}
