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
Route::get('/home', 'ProjectController@Destinasi')->name('home');
Route::get('/detail{id}', 'ProjectController@DetailDestinasi');
Route::get('/about', 'ProjectController@About')->name('about');
Route::get('/comments', 'ProjectController@Comment');
Route::get('/gallery', 'ProjectController@Gallery');

Route::get('/manageDestinasi', 'DestinasiController@index')->name('manageDestinasi');
Route::get('/Destinasiadd','DestinasiController@add');
Route::post('/Destinasi/create','DestinasiController@create');
Route::get('/Destinasiedit{id}','DestinasiController@edit');
Route::post('/Destinasi/update/{id}','DestinasiController@update');
Route::get('/Destinasi/delete/{id}','DestinasiController@delete');

Route::get('/manageComment', 'CommentController@Comment')->name('manageComment');
Route::post('/project/create','ProjectController@create');
Route::get('/Comment/delete/{id}','CommentController@delete');

Route::get('/manageUser', 'UserController@User')->name('manageUser');
Route::get('/Useredit{id}','UserController@edit');
Route::post('/User/update/{id}','UserController@update');
Route::get('/User/delete/{id}','UserController@delete');

Route::get('/Destinasi/cetak_pdf', 'DestinasiController@cetak_pdf');
Route::get('/Comment/cetak_pdf', 'CommentController@cetak_pdf');
Route::get('/User/cetak_pdf', 'UserController@cetak_pdf');