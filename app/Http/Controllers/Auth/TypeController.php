<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Gems\CreateRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('auth.types.index', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.types.create');
    }

    public function store(CreateRequest $request)
    {
        Type::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
        ]);

        $request->session()->flash('success', 'Type created successfully');

        return to_route('types.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $types = Type::where('slug', $id)->first();
        return view('auth.types.edit', ['types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $types = Type::where('slug', $id)->first();
        $input = $request->all();
        $types->update($input);
        return redirect()->route('types.index')->with('success', 'Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $types = Type::where('slug', $id)->first();
        $types->delete();
        return redirect()->route('types.index')->with('danger', 'Type deleted!');
    }
}
