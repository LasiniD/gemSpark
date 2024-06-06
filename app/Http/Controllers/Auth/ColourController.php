<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Gems\CreateRequest;
use App\Http\Requests\Colours\ColourCreateRequest;
use App\Models\Colour;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colours = Colour::all();
        return view('auth.colours.index', ['colours' => $colours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.colours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColourCreateRequest $request)
    {
        Colour::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        $request->session()->flash('success', 'Colour created successfully');

        return to_route('colours.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $colours = Colour::where('slug', $id)->first();
        return view('auth.colours.edit', ['colours' => $colours]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $colours = Colour::where('slug', $id)->first();
        $input = $request->all();
        $colours->update($input);
        return redirect()->route('colours.index')->with('success', 'Colour updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $colours = Colour::where('slug', $id)->first();
        $colours->delete();
        return redirect()->route('colours.index')->with('danger', 'Colour deleted!');
    }
}
