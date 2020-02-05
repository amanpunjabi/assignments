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

Route::get("hello/{fname}","hello@index")->where(['fname'=>"[0-9]+"]);

Route::get("sum/{num1}/{num2}","hello@sum")->where(['num1'=>"[0-9]+"],['num1'=>"[0-9]+"]);

Route::get("mul/{num1}/{num2?}",function($num1,$num2=1)
	{
		$mul = $num2*$num1;
		echo "multiplication is :- ".$mul;
	});

Route::redirect('/here', '/there');

// middleware demo
Route::get("mid/{num1}/{num2?}",function($num1,$num2=1)
	{
		$mul = $num2*$num1;
		echo "multiplication is :- ".$mul;
	})->middleware('test');