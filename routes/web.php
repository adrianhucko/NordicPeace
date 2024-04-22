<?php
use App\Http\Controllers\HomeController;
use Egulias\EmailValidator\Parser\CommentStrategy\CommentStrategy;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;





Route::get('/', function () {                   //actual main page 
    return Inertia::render('Welcome', [
        'name' => 'ExampleName',
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([                           //login authentication
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 
    ])->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Home');
        })->name('dashboard');
    });
    
    //home page
    Route::get('/home/{user}', HomeController::class)->name('home');
    
    //profile page
    Route::get('/profile/{user}', ProfileController::class)->name('profile');
    
    Route::get('/settings', function() {        //working
        return Inertia::render('Settings');
    });
    
    Route::get('/saved', function() {           //saved
        return Inertia::render('Saved');
    });
    
                                                // Comments
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');




    // Route::get('/profile', function () {                 //UNDERSTAND THIS
        //     return Inertia::render('Profile/Show', [
            //         'hasProfileRoute' => Route::has('profile.show'),
            //     ]);
// })->name('Profilik');