<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Gem;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $gems = Gem::with(['type', 'colour', 'shape'])->get();
        return view('auth.dashboard',['gems' => $gems, 'users' => $users]);
    }
}
