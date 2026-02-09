<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'show_home'])->name('show_home');
Route::get('/read_home', [HomeController::class, 'read_home'])->name('read_home');
Route::get('/edit_home/{id}', [HomeController::class, 'edit_home'])->name('edit_home');
Route::post('/update_home/{id}', [HomeController::class, 'update_home'])->name('update_home');




Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
