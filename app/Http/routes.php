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
    //'password' => 'Auth\RegistrationController',
]);



//Группа для сайтов
/*
Route::group(['domain' => '{sitename}.{sitedomen}'], function()
{
    Route::controller('/', 'HomeController');

});
*/




// Спец группа отмывания
Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function()
{
    Route::controller('sites', 'SitesController', [
        'getIndex' => 'sites',
    ]);
});


//Группа админ
Route::group(['namespace' => 'Admin', 'prefix' => 'dashboard', 'middleware' => ['auth', 'sentry']], function ()
{
    Route::resource('user', 'UserController');
    Route::resource('groups', 'GroupsController');

	Route::controller('page', 'PageController', [
		'getIndex' => 'page',
	]);

    Route::controller('news', 'NewsController', [
        'getIndex' => 'news',
    ]);

    Route::controller('shares', 'SharesController', [
        'getIndex' => 'share',
    ]);

    Route::controller('menu', 'MenuController', [
        'getIndex' => 'menu',
    ]);

    Route::controller('feedback', 'FeedbackController', [
        'getIndex' => 'feedback',
    ]);

    Route::controller('reviews', 'ReviewsController', [
        'getIndex' => 'reviews',
    ]);

    Route::controller('category', 'CategoryController', [
        'getIndex' => 'category',
    ]);

    Route::controller('goods', 'GoodsController', [
        'getIndex' => 'goods',
    ]);

    Route::controller('comments', 'CommentsController', [
        'getIndex' => 'comments',
    ]);

    Route::controller('surveys', 'SurveysController', [
        'getIndex' => 'surveys',
    ]);

    Route::controller('chat', 'ChatController', [
        'getIndex' => 'chat',
    ]);

    Route::controller('appointments', 'AppointmentsController', [
        'getIndex' => 'appointments',
    ]);

    Route::controller('filemanager', 'FilemanagerController', [
        'getIndex' => 'filemanager',
    ]);

    Route::resource('codeeditor', 'CodeEditorController');

    Route::controller('/', 'AdminController', [
        'getIndex' => 'admin',
    ]);


});



