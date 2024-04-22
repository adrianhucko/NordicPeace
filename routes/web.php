<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::middleware(['auth'])->group(function () {
    // Home page
    Route::get('/', HomeController::class);

    // Profile page
    Route::get('/profile/{user}', ProfileController::class)->name('profile');

    // Add comment
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    // Settings
//    Route::get('/settings', function() {        //working
//        return Inertia::render('Settings');
//    });

});

