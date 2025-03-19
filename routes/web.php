<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminStationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\VehiclerentalController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Homecontroller is now a closure function
Route::get('/',[HomeController::class,'index'])->name('index');

// OrderController is now a closure function
Route::post('/order',[OrderController::class,'index'])->name('order.index');

// BookingController is now a closure function
Route::get('/booking',[BookingController::class,'index'])->name('booking.index');
Route::post('/booking',[BookingController::class,'store'])->name('booking.store');

// FAQController is now a closure function
Route::controller(FaqController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq');
});

// VehicleController is now a closure function
Route::controller(VehiclerentalController::class)->group(function () {
    Route::get('/vehicle', 'index')->name('vehicle');
});

//ContactController is now a closure function
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});

//AbouteController is now a closure function
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});


// Admin routes
Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    });

    //AdminBookingController is now a closure function
    Route::controller(AdminBookingController::class)->group(function () {
        Route::get('/admin/booking', 'index')->name('admin.booking');
    });

    //AdminStationController is now a closure function
    Route::controller(AdminStationController::class)->group(function () {
        Route::get('/admin/station', 'index')->name('admin.station.index');
        Route::get('/admin/station/create', 'create')->name('admin.station.create');
    });

    //AdminReportController is now a closure function
    Route::controller(AdminReportController::class)->group(function () {
        Route::get('/admin/report', 'index')->name('admin.report');
    });

    //AdminSettingController is now a closure function
    Route::controller(AdminSettingController::class)->group(function () {
        Route::get('/admin/setting', 'index')->name('admin.setting');
    });

});


require __DIR__.'/auth.php';
