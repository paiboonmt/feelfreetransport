<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Homecontroller is now a closure function
Route::get('/',[HomeController::class,'index'])->name('index');


// OrderController is now a closure function
Route::post('/order',[OrderController::class,'index'])->name('order.index');

// BookingController is now a closure function
Route::get('/booking',[BookingController::class,'index'])->name('booking.index');
Route::post('/booking',[BookingController::class,'store'])->name('booking.store');  

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
