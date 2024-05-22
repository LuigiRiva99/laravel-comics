<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {

    $comics = config('comics');

    return view('comics', compact('comics'));
})->name('comics');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

//info folder
Route::get('/chi-siamo', function () {
    return view('info.chi-siamo');
})->name('chi-siamo');

Route::get('/privacy', function () {
    return view('info.privacy');
})->name('privacy');

Route::get('/contatti', function () {
    return view('info.contatti');
})->name('contatti');

