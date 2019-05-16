<?php

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

Route::get('/', 'PagesController@home');

Route::resource('decks','DecksController');
Route::post('/decks/{deck}/cards', 'DeckCardsController@store');

Route::get('/rules', 'PagesController@rules');

Route::get('/cards', 'PagesController@cards');

Route::get('/profiles', 'ProfilesController@profiles');

Route::resource('profiles', 'ProfilesController');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
