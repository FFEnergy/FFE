<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/pages/index');
});
Route::get('/index', function () {
    return view('/pages/index');
});

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
