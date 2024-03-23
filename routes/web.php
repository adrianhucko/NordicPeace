<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;



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


Route::get('/home', function () {            //home page
    return Inertia::render('Home');
});

Route::get('/profile', function () {         //profile page
    return Inertia::render('Profile');
})->name('profile');

Route::get('/settings', function() {        //working
    return Inertia::render('Settings');
});

Route::get('/saved', function() {           //saved
    return Inertia::render('Saved');
});


// Route::get('/profile', function () {                 //UNDERSTOOD THIS
//     return Inertia::render('Profile/Show', [
//         'hasProfileRoute' => Route::has('profile.show'),
//     ]);
// })->name('Profilik');