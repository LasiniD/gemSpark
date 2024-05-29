<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $gems = \App\Models\Gem::all();
        return view('pages.home', ['gems' => $gems]);
    }
}
