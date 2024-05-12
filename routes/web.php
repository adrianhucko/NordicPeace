<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowedUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::middleware(['auth'])->group(function () {
    // Home page
    Route::get('/', HomeController::class);

    // Profile page
    Route::get('/profile/{user}', ProfileController::class)->name('profile');

    // Add comment
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    // Add post
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Follow user
    Route::post('/followed-users/follow', [FollowedUserController::class, 'follow'])->name('followed-users.follow');

    // Unfollow user
    Route::post('/followed-users/unfollow', [FollowedUserController::class, 'unfollow'])->name('followed-users.unfollow');

        // Settings
    //    Route::get('/settings', function() {        //working
    //        return Inertia::render('Settings');
    //    });

});

