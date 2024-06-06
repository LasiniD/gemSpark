<?php

use App\Http\Controllers\Auth\GemController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/colour', [\App\Http\Controllers\Auth\HomeColourController::class, 'index'])->name('colour');
Route::get('/shape', [\App\Http\Controllers\Auth\HomeShapeController::class, 'index'])->name('shape');
Route::get('/type', [\App\Http\Controllers\Auth\HomeTypeController::class, 'index'])->name('type');

Route::get('/logout', function () {
    \auth()->logout();
    return redirect()->route('home');
})->name('logout');

Auth::routes();

Route::group(['middleware' => [AdminMiddleware::class]], function () {
    Route::get('auth/dashboard', [\App\Http\Controllers\Auth\DashboardController::class, 'index'])->name('auth.dashboard');
    Route::resource('auth/gems', \App\Http\Controllers\Auth\GemController::class);
    Route::resource('auth/colours', \App\Http\Controllers\Auth\ColourController::class);
    Route::resource('auth/shapes', \App\Http\Controllers\Auth\ShapeController::class);
    Route::resource('auth/types', \App\Http\Controllers\Auth\TypeController::class);
    Route::resource('auth/users', \App\Http\Controllers\Auth\UserController::class);
});



Route::get('/gems/{gem}', [\App\Http\Controllers\Auth\HomeController::class, 'show'])->name('home.show');
Route::get('/type/{type}', [\App\Http\Controllers\Auth\HomeTypeController::class, 'show'])->name('homeType.show');
Route::get('/colour/{colour}', [\App\Http\Controllers\Auth\HomeColourController::class, 'show'])->name('homeColour.show');
Route::get('/shape/{shape}', [\App\Http\Controllers\Auth\HomeShapeController::class, 'show'])->name('homeShape.show');

Route::get('/cart/{cart}', [\App\Http\Controllers\Auth\CartController::class, 'index'])->name('cart');
//remove from cart route
/*Route::get('/cart/{cart}', [\App\Http\Controllers\Auth\CartController::class, 'remove'])->name('cart.remove');*/


Route::get('/gems/{gem}/delete/{id}',[\App\Livewire\Reviews::class,'delete'])->name('review.delete');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::post('/session', [\App\Http\Controllers\Auth\StripeController::class, 'session'])->name('session');
Route::get('/success',[\App\Http\Controllers\Auth\StripeController::class,'success'])->name('success');
Route::get('/cancel',[\App\Http\Controllers\Auth\StripeController::class,'cancel'])->name('cancel');
