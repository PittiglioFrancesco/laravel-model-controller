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
    return view('home');
})->name('pagina-home');

Route::get('/characters', function () {
    return view('characters');
})->name('pagina-characters');

Route::get('/comics', function () {

    $comics = config('comics');

    $data = ['fumetti' => $comics];

    return view('comics', $data);
})->name('pagina-comics');

Route::get('/comic/{id}', function ($id) {

    $comics = config('comics');

    $data = ['fumetto' => $comics[$id]];

    return view('comic', $data);
})->name('pagina-comic');

Route::get('/movies', function () {
    return view('movies');
})->name('pagina-movies');

Route::get('/tv', function () {
    return view('tv');
})->name('pagina-tv');

Route::get('/games', function () {
    return view('games');
})->name('pagina-games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('pagina-collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('pagina-videos');

Route::get('/fans', function () {
    return view('fans');
})->name('pagina-fans');

Route::get('/news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/shop', function () {
    return view('shop');
})->name('pagina-shop');