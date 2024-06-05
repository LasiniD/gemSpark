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
        $gems = Gem::with(['type', 'colour', 'shape'])->get();
        return view('auth.gems.index', ['gems' => $gems]);
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
       $gem =  Gem::create([
            'name' => $request->name,
            'image' => '/',
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

       if($request->has('file')){
           $gem->addMedia($request->file)->toMediaCollection('images');
       }

        $request->session()->flash('success', 'Gem created successfully');

        return to_route('gems.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gems = Gem::with(['type', 'colour', 'shape'])->where('slug', $id)->first();
        $types = Type::where('id', $gems->type_id)->first();
        $colours = Colour::where('id', $gems->colour_id)->first();
        $shapes = Shape::where('id', $gems->shape_id)->first();
        return view('auth.gems.view', ['gems' => $gems,'types' => $types, 'colours' => $colours, 'shapes' => $shapes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gems = Gem::with(['type', 'colour', 'shape'])->where('slug', $id)->first();

        $type = Type::where('id', $gems->type_id)->first();
        $colour = Colour::where('id', $gems->colour_id)->first();
        $shape = Shape::where('id', $gems->shape_id)->first();

        $types = Type::all();
        $colours = Colour::all();
        $shapes = Shape::all();

        return view('auth.gems.edit', ['gems' => $gems,'types' => $types, 'colours' => $colours, 'shapes' => $shapes, 'type' => $type, 'colour' => $colour, 'shape' => $shape]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gems = Gem::where('slug', $id)->first();
        $input = $request->all();
        $gems->update($input);

        if ($request->hasFile('file')) {
            // Delete existing media (consider adding logic for selective deletion)
            $gems->clearMediaCollection('images');

            // Add new media from uploaded file
            $gems->addMedia($request->file('file'))->toMediaCollection('images');
        }

        return redirect()->route('gems.index')->with('success', 'Gem updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gems = Gem::where('slug', $id)->first();
        $gems->delete();
        return redirect()->route('gems.index')->with('danger', 'Gem deleted!');
    }
}
