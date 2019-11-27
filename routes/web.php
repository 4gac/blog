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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/referent', 'ReferentController@index')->name('referent')->middleware('referent');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/ucastnik', 'UcastnikController@index')->name('ucastnik')->middleware('ucastnik');
//Route::get('/admin', 'AdminController@index');

//-------------------------------------------------------------------
/*homepage*/
Route::get('/',[
    'as'=>'homepage','uses' =>'PostController@index'
]);
/*konkretny post*/
Route::get('post/{id}',[
    'as'=>'show', 'uses'=>'PostController@show'
    ]);
/*Študijné pobyty*/
Route::get('studijne-pobyty',[
    'as'=>'pobyty','uses' =>'PostController@pobyty'
]);

/*Pracovné stáže*/
Route::get('pracovne-staze',[
    'as'=>'staze','uses' =>'PostController@staze'
]);

/*Účastnícke správy*/
Route::get('ucastnicke-spravy',[
    'as'=>'spravy','uses' =>'PostController@spravy'
]);
/*konkretny user pre frontend*/
Route::get('user/{id}',[
    'as'=>'show', 'uses'=>'UserController@show'
    ]);
/*tagy*/
Route::get('tags/showAll',[
    'as'=>'showAll','uses' =>'TagController@showAllAction'
]);
//-----------------------ROUTES PRE OPERACIE V ADMIN LTE---------------------------------------

//-----<CRUD USEROV>----------------------------------------------------------

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
//------------------</CRUD USEROV>--------------------------------------------
/*<CRUD postov v admin rozhrani>*/
Route::get('pobyty-crud',[
    'as'=>'pobyty','uses' =>'PostController@PobytyBackend'
    ]);
Route::get('staze-crud',[
        'as'=>'staze','uses' =>'PostController@StazeBackend'
        ]);
Route::get('spravy-crud',[
            'as'=>'spravy','uses' =>'PostController@SpravyBackend'
            ]);