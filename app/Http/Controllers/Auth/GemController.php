<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Gems\CreateRequest;
use App\Models\Colour;
use App\Models\Gem;
use App\Models\Shape;
use App\Models\Type;
use Illuminate\Http\Request;

class GemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.gems.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $colours = Colour::all();
        $shapes = Shape::all();
        return view('auth.gems.create',['types' => $types, 'colours' => $colours, 'shapes' => $shapes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if ($file = $request->has('file')) {
            $file = $request->file('file');
            $fileName = time().$file->getClientOriginalName();
            $imagePath = public_path().'/images/gems';
        }
        Gem::create([
            'name' => $request->name,
            'image' => $request->file->move($imagePath, $fileName),
            'price' => $request->price,
            'where_from' => $request->from,
            'carat_weight' => $request->c_weight,
            'stock' => $request->stock,
            'min_stock' => $request->min_stock,
            'is_available' => $request->stock > 0,
            'slug' => $request->slug,
            'type_id' => $request->type,
            'colour_id' => $request->colour,
            'shape_id' => $request->shape
        ]);

        $request->session()->flash('success', 'Gem created successfully');

        return to_route('gems.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
