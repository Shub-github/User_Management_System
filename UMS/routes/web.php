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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/user','RecordController@index')->name('User_index');
// Route::get('/user/create','RecordController@create')->name('User_create');

// Route::post('/store','RecordController@store')->name('record_store');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user','RecordController@index')->name('User_index');
Route::get('/user/create','RecordController@create')->name('User_create');
Route::get('/user/record','RecordController@index')->name('record');
Route::post('/user/store','RecordController@store')->name('store');
Route::delete('/user/delete/{id}','RecordController@destroy')->name('delete');