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
Route::resource('auth/colours', \App\Http\Controllers\Auth\ColourController::class)->middleware('auth');
Route::resource('auth/shapes', \App\Http\Controllers\Auth\ShapeController::class)->middleware('auth');
Route::resource('auth/types', \App\Http\Controllers\Auth\TypeController::class)->middleware('auth');

Route::get('/gems/{gem}', [\App\Http\Controllers\Auth\HomeController::class, 'show'])->name('home.show');
Route::get('/type/{type}', [\App\Http\Controllers\Auth\HomeTypeController::class, 'show'])->name('homeType.show');
Route::get('/colour/{colour}', [\App\Http\Controllers\Auth\HomeColourController::class, 'show'])->name('homeColour.show');
Route::get('/shape/{shape}', [\App\Http\Controllers\Auth\HomeShapeController::class, 'show'])->name('homeShape.show');
