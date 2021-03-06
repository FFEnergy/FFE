<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ IndexController, AboutController, ContactController, BuyController, UserController, ContentController};



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/fiche-produit', [BuyController::class, 'index'])->name('buy');
Route::get('/compte', [UserController::class, 'index'])->name('compte');


Route::get('/modification', [ContentController::class, 'index'])->name('modification');
Route::get('/contact-list', [ContactController::class, 'show'])->name('contact-show');


Route::post('updateUser', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::post('contact', [ContactController::class, 'contact'])->name('contact.contact');
Route::post('contactResp', [ContactController::class, 'reponse'])->name('contact.resp');
Route::post('requeteModifier', [ContentController::class, 'update'])->name('modif');
