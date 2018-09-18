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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/like/{productID}', 'HomeController@like')->name('like');
Route::get('/removelike/{productID}', 'HomeController@removelike')->name('removelike');
Route::get('/dislike/{productID}', 'HomeController@dislike')->name('dislike');
Route::get('/preferred-shop', 'HomeController@preferred')->name('preferred');
