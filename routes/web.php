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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/referent', 'ReferentController@index')->name('referent')->middleware('referent');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/ucastnik', 'UcastnikController@index')->name('ucastnik')->middleware('ucastnik');
//Route::get('/admin', 'AdminController@index');

/*CRUD USEROV*/

Route::get('users-crud',[
    'as'=>'showall', 'uses'=>'UserController@showallAction'
    ]);
Route::get('users-crud/show/{id}',[
'as'=>'show', 'uses'=>'UserController@showAction'
]);
Route::post('users-crud/insert',[
    'as'=>'insert', 'uses'=>'UserController@insertAction'
    ]);
Route::post('users-crud/update/{id}',[
        'as'=>'update', 'uses'=>'UserController@updateAction'
        ]);
Route::get('users-crud/add-user',[
            'as'=>'add-user', 'uses'=>'UserController@getAddUserForm'
            ]);
    
Route::get('users-crud/delete/{id}',[
            'as'=>'delete', 'uses'=>'UserController@deleteAction'
            ]);
Route::get('/',[
    'as'=>'showAll','uses' =>'PostController@showAllAction'
]);
Route::get('tags/showAll',[
    'as'=>'showAll','uses' =>'TagController@showAllAction'
]);