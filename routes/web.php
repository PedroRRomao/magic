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

Route::get('/decks', 'PagesController@decks');

Route::get('/rules', 'PagesController@rules');

<<<<<<< HEAD

Route::get('/profiles', 'ProfilesController@profiles');
=======
Route::resource('profiles', 'ProfilesController');

// Route::get('/profiles', 'ProfilesController@index');
//
// Route::get('/profiles/{profile}', 'ProfilesController@show');
//
// Route::post('/profiles', 'ProfilesController@store');
//
// Route::get('/profiles/edit', 'ProfilesController@edit');
>>>>>>> beja


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
