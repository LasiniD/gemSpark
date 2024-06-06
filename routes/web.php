<?php

use App\Http\Controllers\Auth\GemController;
use App\Http\Controllers\Auth\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/colour', [\App\Http\Controllers\Auth\HomeColourController::class, 'index'])->name('colour');
Route::get('/shape', [\App\Http\Controllers\Auth\HomeShapeController::class, 'index'])->name('shape');
Route::get('/type', [\App\Http\Controllers\Auth\HomeTypeController::class, 'index'])->name('type');


Route::get('/admin', function () {
    return view('auth.dashboard');
});

Route::get('/logout', function () {
    \auth()->logout();
    return redirect()->route('home');
})->name('logout');

Auth::routes();

/*Route::get('/auth', function () {
    // ...
})->middleware(EnsureTokenIsValid::class);*/

Route::get('auth/dashboard', [\App\Http\Controllers\Auth\DashboardController::class, 'index'])->name('auth.dashboard');
Route::resource('auth/gems', \App\Http\Controllers\Auth\GemController::class);
Route::resource('auth/colours', \App\Http\Controllers\Auth\ColourController::class);
Route::resource('auth/shapes', \App\Http\Controllers\Auth\ShapeController::class);
Route::resource('auth/types', \App\Http\Controllers\Auth\TypeController::class);

Route::get('/gems/{gem}', [\App\Http\Controllers\Auth\HomeController::class, 'show'])->name('home.show');
Route::get('/type/{type}', [\App\Http\Controllers\Auth\HomeTypeController::class, 'show'])->name('homeType.show');
Route::get('/colour/{colour}', [\App\Http\Controllers\Auth\HomeColourController::class, 'show'])->name('homeColour.show');
Route::get('/shape/{shape}', [\App\Http\Controllers\Auth\HomeShapeController::class, 'show'])->name('homeShape.show');

Route::get('/cart/{id}', [\App\Http\Controllers\Auth\CartController::class, 'index'])->name('cart');

/*Route::post('/gems/{gem}/reviews',\App\Livewire\Reviews::class)->name('review.store');*/
