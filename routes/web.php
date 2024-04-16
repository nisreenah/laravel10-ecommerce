<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeSliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // visitor
    Route::get('/home-slider', [HomeSliderController::class, 'show'])->name('home.slider');

    // admin
    Route::get('/home-slider/{slider}/edit', [HomeSliderController::class, 'edit'])->name('home.slider.edit');
    Route::patch('/home-slider/{slider}/update', [HomeSliderController::class, 'update'])->name('home.slider.update');

});


require __DIR__.'/auth.php';
