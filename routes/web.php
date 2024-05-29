<?php

use App\Http\Controllers\Auth\GemController;
use App\Http\Controllers\Auth\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/single', function () {
    return view('pages.single');
});

Route::get('/admin', function () {
    return view('auth.dashboard');
});

Route::get('/logout', function () {
    \auth()->logout();
    return redirect()->route('home');
})->name('logout');

Auth::routes();

Route::get('auth/dashboard', [\App\Http\Controllers\Auth\DashboardController::class, 'index'])->name('auth.dashboard')->middleware('auth');

/*Route::get('auth/gems', [\App\Http\Controllers\GemController::class, 'index'])->name('gems.index');*/

Route::resource('auth/gems', \App\Http\Controllers\Auth\GemController::class)->middleware('auth');

/*Route::patch('auth/gems/{gem}/edit', [\App\Http\Controllers\Auth\GemController::class, 'edit'])->middleware('auth');*/
