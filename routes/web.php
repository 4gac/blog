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

/*Kontakty*/
Route::get('kontakt',[
    'as'=>'kontakt','uses' =>'ContactController@showAll'
]);

/*Spracovanie formularu*/
Route::post('fetchform',[
    'as'=>'fetchForm','uses' =>'ContactController@fetchForm'
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

//-----<CRUD KOKNTAKTOV>----------------------------------------------------------

Route::get('kontakty-crud',[
    'as'=>'showall', 'uses'=>'ContactController@ContactsBackend'
    ]);
Route::get('kontakty-crud/add-kontakt',[
        'as'=>'add-user', 'uses'=>'ContactController@getAddContactForm'
]);
Route::post('kontakty-crud/insert',[
    'as'=>'insert', 'uses'=>'ContactController@addContactAction'
]);
Route::post('kontakty-crud/update/{id}',[
        'as'=>'update', 'uses'=>'ContactController@updateContactAction'
]);
Route::get('kontakty-crud/show/{id}',[
'as'=>'show', 'uses'=>'ContactController@showContactAction'
]);

Route::get('kontakty-crud/delete/{id}',[
            'as'=>'delete', 'uses'=>'ContactController@deleteContactAction'
]);

//------------------</CRUD KONTAKTOV>--------------------------------------------

/*<CRUD postov v admin rozhrani>*/
Route::get('admin-pobyty-crud',[
    'as'=>'admin-pobyty-crud','uses' =>'PostController@AdminPobytyBackend'
    ]);
Route::get('referent-pobyty-crud',[
        'as'=>'referent-pobyty-crud','uses' =>'PostController@ReferentPobytyBackend'
    ]);
Route::get('admin-staze-crud',[
        'as'=>'admin-staze-crud','uses' =>'PostController@AdminStazeBackend'
        ]);
Route::get('referent-staze-crud',[
            'as'=>'referent-staze-crud','uses' =>'PostController@ReferentStazeBackend'
        ]);
Route::get('ucastnik/dostupne-pobyty',[
            'as'=>'ucastnik/dostupne-pobyty','uses' =>'PostController@DostupnePobyty'
        ]);
//----------------------------------
Route::get('admin-pobyty-crud/show/{id}',[
'as'=>'show', 'uses'=>'PostController@AdminshowPobytAction'
]);
Route::get('referent-pobyty-crud/show/{id}',[
    'as'=>'show', 'uses'=>'PostController@ReferentshowPobytAction'
    ]);
Route::get('admin-staze-crud/show/{id}',[
        'as'=>'show', 'uses'=>'PostController@AdminshowStazAction'
        ]);
Route::get('referent-staze-crud/show/{id}',[
            'as'=>'show', 'uses'=>'PostController@ReferentshowStazAction'
            ]);
//---------------------------------------------
Route::post('pobyty-crud/update/{id}',[
        'as'=>'update', 'uses'=>'PostController@updatePobytAction'
        ]);
Route::post('staze-crud/update/{id}',[
            'as'=>'update', 'uses'=>'PostController@updateStazAction'
        ]);
Route::get('pobyty-crud/delete/{id}',[
    'as'=>'delete', 'uses'=>'PostController@deletePobytAction'
]);
Route::get('staze-crud/delete/{id}',[
    'as'=>'delete', 'uses'=>'PostController@deleteStazAction'
]);
//-------------------------------------------------------------------
Route::post('admin-pobyty-crud/insert',[
        'as'=>'insert', 'uses'=>'PostController@AdmininsertPobytAction'
        ]);
Route::post('referent-pobyty-crud/insert',[
            'as'=>'insert', 'uses'=>'PostController@ReferentinsertPobytAction'
            ]);
Route::post('admin-staze-crud/insert',[
                'as'=>'insert', 'uses'=>'PostController@AdmininsertStazAction'
                ]);
Route::post('referent-staze-crud/insert',[
                    'as'=>'insert', 'uses'=>'PostController@ReferentinsertStazAction'
                    ]);
//-----------------------------------------------------------------------------
Route::get('admin-pobyty-crud/add-pobyt',[
            'as'=>'add-pobyt', 'uses'=>'PostController@AdmingetAddPobytForm'
            ]);
Route::get('referent-pobyty-crud/add-pobyt',[
                'as'=>'referent-pobyty-crud/add-pobyt', 'uses'=>'PostController@ReferentgetAddPobytForm'
            ]);
Route::get('admin-staze-crud/add-staz',[
                'as'=>'add-staz', 'uses'=>'PostController@AdmingetAddStazForm'
                ]);
Route::get('referent-staze-crud/add-staz',[
                    'as'=>'referent-staze-crud/add-staz', 'uses'=>'PostController@ReferentgetAddStazForm'
                ]);
//---------------------------------------------------------------------------------
Route::get('ucastnik/dostupne-pobyty/show/{id}',[
                    'as'=>'ucastnik/dostupne-pobyty/show', 'uses'=>'PostController@UcastnikshowPobytAction'
                    ]);Route::post('gallery/insert', [
    'as' => 'insert','uses' => 'GalleryImageController@insertGalleryImage'
]);
Route::post('ucastnik/dostupne-pobyty/insert{id}', [
    'as' => 'ucastnik/dostupne-pobyty/insert','uses' => 'ZaujemController@PrihlasitNaPobytAction'
]);

Route::get('galeria',[
    'as'=>'galeria', 'uses'=>'GalleryImageController@celaGaleria'
]);
Route::get('gallery/delete/{id}', [
    'as' => 'delete','uses' => 'GalleryImageController@removeFromDB'
]);
Route::post('gallery/insert', [
    'as' => 'insert','uses' => 'GalleryImageController@insertGalleryImage'
]);

