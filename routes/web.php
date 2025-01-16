<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [WebsiteController::class, 'index'])->name('index');

Route::get('/about', [WebsiteController::class, 'about'])->name('about');

Route::get('/works', [WebsiteController::class, 'works'])->name('works');

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
