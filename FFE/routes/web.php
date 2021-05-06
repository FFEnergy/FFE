<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ IndexController};

// Route::get('/', function () {
//     return view('/pages/index');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');

// Route::get('/index', function () {
//     return view('/pages/index');
// });

Route::get('/fiche-produit', function () {
    return view('/pages/fiche-produit');
});
Route::get('/contact', function () {
    return view('/pages/contact');
});
Route::get('/AboutUs', function () {
    return view('/pages/AboutUs');
});

Route::get('home', function () {
return view('home');
})->middleware('auth');
