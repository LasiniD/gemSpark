<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Gems\CreateRequest;
use App\Http\Requests\Shapes\ShapeCreateRequest;
use App\Models\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shapes = Shape::all();
        return view('auth.shapes.index', ['shapes' => $shapes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.shapes.create');
    }

    public function store(ShapeCreateRequest $request)
    {
        Shape::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        $request->session()->flash('success', 'Shape created successfully');

        return to_route('shapes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shapes = Shape::where('slug', $id)->first();
        return view('auth.shapes.edit', ['shapes' => $shapes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shapes = Shape::where('slug', $id)->first();
        $input = $request->all();
        $shapes->update($input);
        return redirect()->route('shapes.index')->with('success', 'Shape updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shapes = Shape::where('slug', $id)->first();
        $shapes->delete();
        return redirect()->route('shapes.index')->with('danger', 'Shape deleted!');
    }
}
