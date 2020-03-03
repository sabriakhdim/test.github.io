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

Route::get('/','MyController@index');
Route::get('/albums','MyController@portfolio');
Route::get('/infoSceance','MyController@infoSceance');

Route::get('/contact','MyController@contact');
Route::post('/contact', 'MyController@store');


Route::get('albums/{albumName}', 'DropboxController@getFromDropbox');
Route::get('update', 'DropboxController@updateAllAlbumDropbox');

Route::get('tarif', 'MyController@tarif');
