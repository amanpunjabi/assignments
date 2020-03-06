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
    return view('index');
});

Route::resource('users', 'UserController');
Route::get('users/ajax/valid_email','UserController@valid_email');
Route::get('users/ajax/valid_contact','UserController@valid_contact');

Route::get('users/{id}/ajax/valid_email','UserController@valid_email');
Route::get('users/{id}/ajax/valid_contact','UserController@valid_contact');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');