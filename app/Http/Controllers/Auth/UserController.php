<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('auth.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role,
            'file' => $request->file,
        ]);

        /*if ($request->has('file')) {
            $users->addMedia($request->file)->toMediaCollection('users');
        }*/

        $request->session()->flash('success', 'User created successfully');

        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /*$users = User::where('id', $id)->first();
        return view('auth.users.view', ['users' => $users]);*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::where('id', $id)->first();
        return view('auth.users.edit', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::where('id', $id)->first();
        $input = $request->all();
        $users->update($input);

        $role = $request->input('role');
        if ($role) {
            $users->update(['role' => $role]); // Update role specifically
        }

        if ($request->hasFile('file')) {
            // Delete existing media (consider adding logic for selective deletion)
            $users->clearMediaCollection('users');

            // Add new media from uploaded file
            $users->addMedia($request->file('file'))->toMediaCollection('users');
        }

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::where('id', $id)->first();
        $users->delete();
        return redirect()->route('users.index')->with('danger', 'User deleted!');
    }
}

