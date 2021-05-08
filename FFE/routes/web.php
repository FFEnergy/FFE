<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ IndexController, AboutController, ContactController, BuyController};



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/fiche-produit', [BuyController::class, 'index'])->name('buy');



Route::get('home', function () {
return view('home');
})->middleware('auth');
