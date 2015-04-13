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



//Перенаправление авторизации
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//Группа для сайтов
Route::group(['domain' => '{sitename}.{sitedomen}'], function()
{
    Route::controller('/', 'HomeController');

});




//Группа админ
// ДОбавить ,'middleware' => 'authdashboard'
Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function()
{
    Route::resource('page', 'PageController', ['as' => 'page']);
    Route::resource('user', 'UserController');
});


