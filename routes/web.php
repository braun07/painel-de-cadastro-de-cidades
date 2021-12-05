<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityHallController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('city-halls',CityHallController::class);
    Route::resource('cities', CityController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('activity', ActivityController::class);

});