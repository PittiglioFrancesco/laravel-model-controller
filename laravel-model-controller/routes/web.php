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

Route::get('/', 'HomeController@index')->name('pagina-home');

Route::get('/characters', 'HomeController@characters')->name('pagina-characters');

Route::get('/comics', 'ComicController@comics')->name('pagina-comics');

Route::get('/detail/{id}', 'ComicController@show')->name('pagina-detail');

Route::get('/movies', 'HomeController@movies')->name('pagina-movies');

Route::get('/tv', 'HomeController@tv')->name('pagina-tv');

Route::get('/games', 'HomeController@games')->name('pagina-games');

Route::get('/collectibles', 'HomeController@collectibles')->name('pagina-collectibles');

Route::get('/videos', 'HomeController@videos')->name('pagina-videos');

Route::get('/fans', 'HomeController@fans')->name('pagina-fans');

Route::get('/news', 'HomeController@news')->name('pagina-news');

Route::get('/shop', 'HomeController@shop')->name('pagina-shop');
