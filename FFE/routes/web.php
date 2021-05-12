<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ IndexController, AboutController, ContactController, BuyController, UserController};



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/fiche-produit', [BuyController::class, 'index'])->name('buy');
Route::get('/compte', [UserController::class, 'index'])->name('compte');
Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});

Route::post('updateUser', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::post('contact', [ContactController::class, 'contact'])->name('contact.contact');
