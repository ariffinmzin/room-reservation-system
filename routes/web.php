<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/roomreservations/bookingList', [RoomReservationController::class, 'bookingListForAdmin'])->name('roomreservations.bookingListForAdmin');

Route::put('/roomreservations/{id}/status', [RoomReservationController::class, 'updateStatus'])->name('roomreservations.updateStatus');

Route::resource('rooms', RoomController::class);

Route::resource('roomreservations', RoomReservationController::class);




require __DIR__.'/auth.php';
