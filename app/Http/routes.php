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




Route::group(['domain' => '{sitename}.{sitedomen}','namespace' => 'Site'], function()
{
    Route::resource('/encyclopedia', 'EncyclopediaController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/gallery', 'GalleryController');
    Route::resource('/team', 'TeamController');
    Route::resource('/feedback', 'FeedbackController');
    Route::controller('/appointment', 'AppointmentController', [
        'getIndex' => 'appointment',
    ]);
    Route::resource('/blog', 'BlogController');
    Route::resource('/', 'HomeController');
});





// Спец группа отмывания
Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function()
{
    Route::controller('sites', 'SitesController', [
        'getIndex' => 'sites',
    ]);
});


//Группа админ
//  'middleware' => ['auth', 'sentry']
Route::group(['namespace' => 'Admin', 'prefix' => 'dashboard'], function ()
{
    Route::resource('user', 'UserController');
    Route::resource('groups', 'GroupsController');
    Route::resource('encyclopedia', 'EncyclopediaController');
    Route::resource('encyclopediaCategory', 'EncyclopediaCategoryController');
    Route::resource('page', 'PageController');
    Route::resource('news', 'NewsController');
    Route::resource('shares', 'SharesController');
    Route::resource('filemanager', 'FilemanagerController');
    Route::resource('', 'AdminController');
    Route::resource('special', 'SpecialistyController');


    Route::resource('feedback', 'FeedbackController');



    Route::controller('menu', 'MenuController', [
        'getIndex' => 'menu',
    ]);


    Route::controller('reviews', 'ReviewsController', [
        'getIndex' => 'dashboard.reviews.index',
        'getAdd' => 'dashboard.reviews.add',
    ]);


    Route::controller('category', 'CategoryController', [
        'getIndex' => 'dashboard.category.index',
        'getAdd' => 'dashboard.category.add',
    ]);

    Route::controller('goods', 'GoodsController', [
        'getIndex' => 'goods',
        'getAdd' => 'dashboard.goods.add',
    ]);

    Route::controller('comments', 'CommentsController', [
        'getIndex' => 'dashboard.comments.index',
    ]);

    Route::controller('surveys', 'SurveysController', [
        'getIndex' => 'surveys',
    ]);



    Route::controller('gallery', 'GalleryController', [
        'getIndex' => 'dashboard.gallery.index',
        'getAdd' => 'dashboard.gallery.add',
    ]);






});




Route::get('/wmenuindex', array('as' => 'wmenuindex','uses'=>'Admin\WmenuController@wmenuindex'));
Route::post('/addcustommenu', array('as' => 'addcustommenu','uses'=>'Admin\WmenuController@addcustommenu'));
Route::post('/deleteitemmenu', array('as' => 'deleteitemmenu','uses'=>'Admin\WmenuController@deleteitemmenu'));
Route::post('/deletemenug', array('as' => 'deletemenug','uses'=>'Admin\WmenuController@deletemenug'));
Route::post('/createnewmenu', array('as' => 'createnewmenu','uses'=>'Admin\WmenuController@createnewmenu'));
Route::post('/generatemenucontrol', array('as' => 'generatemenucontrol','uses'=>'Admin\WmenuController@generatemenucontrol'));
Route::post('/updateitem', array('as' => 'updateitem','uses'=>'Admin\WmenuController@updateitem'));