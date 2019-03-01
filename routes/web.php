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

Route::get('/', 'WelcomeController@welcome');

Auth::routes();

Route::get('comptes', function() {
    // Réservé aux utilisateurs authentifiés
})->middleware('auth');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/categorie/{id}', 'FrontController@categorie');
Route::get('/combis', 'FrontController@combis')->name('combis');
Route::get('/veste', 'FrontController@veste')->name('veste');
Route::get('/pulls', 'FrontController@pulls')->name('pulls');
Route::get('/accessoires', 'FrontController@accessoires')->name('accessoires');


Route::get('comptes', function() {





});
