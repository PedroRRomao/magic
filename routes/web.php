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


// Route::post('/decks/{deck}/cards', 'DeckCardsController@store');

Route::get('/rules', 'PagesController@rules');

Route::get('/cards', 'PagesController@cards');

Route::get('/decks', 'DecksController@decks');

Route::post('/decks/{deck}', 'DecksController@store');

Route::resource('decks','DecksController');

Route::get('/decktrade/{deck}/trade/{decktrade}', 'DeckTradeController@edit');

Route::resource('decktrade','DeckTradeController');

Route::resource('profiles', 'ProfilesController');

Route::get('send', 'DeckTradeController@sendNotification');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
