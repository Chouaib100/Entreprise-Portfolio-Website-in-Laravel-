<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show_home'])->name('show_home');

// Admin Home
Route::get('/read_home', [HomeController::class, 'read_home'])->name('read_home');
Route::get('/edit_home/{id}', [HomeController::class, 'edit_home'])->name('edit_home');
Route::post('/update_home/{id}', [HomeController::class, 'update_home'])->name('update_home');

// Admin About

Route::get('/read_about', [HomeController::class, 'read_about'])->name('read_about');
Route::get('/edit_about/{id}', [HomeController::class, 'edit_about'])->name('edit_about');
Route::post('/update_about/{id}', [HomeController::class, 'update_about'])->name('update_about');


// Admin Service

Route::get('/read_service', [ServiceController::class, 'read_service'])->name('read_service');
Route::get('/edit_service/{id}', [ServiceController::class, 'edit_service'])->name('edit_service');
Route::post('/update_service/{id}', [ServiceController::class, 'update_service'])->name('update_service');
Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service'])->name('delete_about');
Route::post('/create_service/{id}', [ServiceController::class, 'create_service'])->name('create_service');




Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
