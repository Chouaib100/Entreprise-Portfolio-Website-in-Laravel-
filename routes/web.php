<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
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
Route::get('/add_service', [ServiceController::class, 'add_service'])->name('add_service');
Route::post('/create_service', [ServiceController::class, 'create_service'])->name('create_service');
Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service'])->name('delete_service');
Route::get('/edit_service/{id}', [ServiceController::class, 'edit_service'])->name('edit_service');
Route::post('/update_service/{id}', [ServiceController::class, 'update_service'])->name('update_service');


//Admin Portfolio

Route::get('/read_portfolio', [PortfolioController::class, 'read_portfolio'])->name('read_portfolio');
Route::get('/add_portfolio', [PortfolioController::class, 'add_portfolio'])->name('add_portfolio');
Route::post('/create_portfolio', [PortfolioController::class, 'create_portfolio'])->name('create_portfolio');
Route::get('/delete_portfolio/{id}', [PortfolioController::class, 'delete_portfolio'])->name('delete_portfolio');
Route::get('/edit_portfolio/{id}', [PortfolioController::class, 'edit_portfolio'])->name('edit_portfolio');
Route::post('/update_portfolio/{id}', [PortfolioController::class, 'update_portfolio'])->name('update_portfolio');


//Admin Team

Route::get('/read_team', [TeamController::class, 'read_team'])->name('read_team');
Route::get('/add_team', [TeamController::class, 'add_team'])->name('add_team');
Route::post('/create_team', [TeamController::class, 'create_team'])->name('create_team');
Route::get('/delete_team/{id}', [TeamController::class, 'delete_team'])->name('delete_team');
Route::get('/edit_team/{id}', [TeamController::class, 'edit_team'])->name('edit_team');
Route::post('/update_team/{id}', [TeamController::class, 'update_team'])->name('update_team');

// Admin Contact
Route::get('/read_contact', [ContactController::class, 'read_contact'])->name('read_contact');
Route::get('/edit_contact/{id}', [ContactController::class, 'edit_contact'])->name('edit_contact');
Route::post('/update_contact/{id}', [ContactController::class, 'update_contact'])->name('update_contact');

//Admin Form Contact


Route::post('/create_formcontact', [FormContactController::class, 'create_formcontact'])->name('create_formcontact');
Route::get('/read_formcontact', [FormContactController::class, 'read_formcontact'])->name('read_formcontact');
Route::get('/detail_formcontact/{id}', [FormContactController::class, 'detail_formcontact'])->name('detail_formcontact');
Route::get('/delete_formcontact/{id}', [FormContactController::class, 'delete_formcontact'])->name('delete_formcontact');



Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
