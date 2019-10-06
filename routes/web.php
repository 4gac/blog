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


/*Výpis článkov chceme zobraziť na homepage rovnako ako na stránke článkov. Preto požijeme 
rovnaký controller pre / ako aj /post*/
Route::get('/', 'PostController@index');
Route::resource('post', 'PostController');

/* Zobrazenie konkrétneho tagu a konkrétneho postu*/
Route::get('tag/{id}', 'TagController@show');
Route::get('user/{id}', 'UserController@show');


/*Tieto routy si vytvorila knižnica Auth */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
