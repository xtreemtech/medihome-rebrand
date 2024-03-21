<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/about', [LandingController::class, 'about'])->name('about');

Route::get('/testimonials', [LandingController::class, 'testimonial'])->name('testimonials');

Route::get('/services', [LandingController::class, 'services'])->name('services');

Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

Route::get('/mtn', [LandingController::class, 'mtn'])->name('mtn');

Route::post('/save_submission', [ContactController::class, 'save_submission'])->name('save_submission');

// error pages 

Route::get('/404', [ErrorController::class, 'notfoundpage'])->name('notfound_error');

Route::get('/403', [ErrorController::class, 'unauthorisedpage'])->name('unauthorised_error');

Route::get('/500', [ErrorController::class, 'servererrorpage'])->name('server_error');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/users', function () {
    return view('pages.users');
});


require __DIR__.'/auth.php';
