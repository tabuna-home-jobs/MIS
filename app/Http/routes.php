<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
*/

//Перенаправление авторизации
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'panel' => 'AdminController'
]);



//Route::get('panel', 'HomeController@index');

//Route::controller('panel', 'AdminController');

Route::group(['domain' => '{sitename}.{sitedomen}'], function()
{
    Route::controller('/', 'HomeController');


});



