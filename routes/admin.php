<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\admin\dashboardController;
use App\Http\Controllers\backend\admin\userController;

Route::middleware(['auth', 'verified'])->group(
    function () {
        Route::get(
            '/dashboard',
            [dashboardController::class, 'home']
        )->name('dashboard.home');
        Route::resource('user', userController::class)->names('admin.users');
    }
);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
