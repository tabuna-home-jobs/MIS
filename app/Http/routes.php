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

Route::group(['domain' => 'stomzn48.ru','namespace' => 'stomzn48'], function()
{
    Route::resource('/articles', 'ArticlesController');
    Route::resource('/answers', 'AnswersController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/page', 'PageController');
    Route::resource('/feedback', 'FeedbackController');
    Route::resource('/blog', 'BlogController');
    Route::resource('/', 'HomeController');
});


Route::group(['domain' => '{sitename}.{sitedomen}','namespace' => 'Site'], function()
{
    Route::resource('/video', 'VideoGalleryController');
    Route::resource('/questanswer', 'QuestAnswerController');
    Route::resource('/medencyclopedia', 'EncyclopediaController');
    Route::resource('/encypost', 'EncyPostController');
    Route::resource('/articles', 'ArticlesController');
    Route::resource('/answers', 'AnswersController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/shares', 'SharesController');
    Route::resource('/page', 'PageController');
    Route::resource('/gallery', 'GalleryController');
    Route::resource('/team', 'TeamController');
    Route::resource('/art', 'ArtController');
    Route::resource('/feedback', 'FeedbackController');
    Route::controller('/appointment', 'AppointmentController', [
        'getIndex' => 'appointment',
    ]);
    Route::resource('/blog', 'BlogController');

    Route::resource('/', 'HomeController');


    Route::resource('/login', 'LoginController');

});


// Спец группа отмывания
Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function()
{
    Route::controller('sites', 'SitesController', [
        'getIndex' => 'sites',
    ]);
});


//Группа админ
//

//Извиняюсь за то чо сделал так...
Route::resource('dashboard/spcat', 'Admin\SpecCatController');
Route::post('dashboard/spcat/store','Admin\SpecCatController@store');
Route::get('dashboard/spcat/edit/{id}','Admin\SpecCatController@edit');
Route::post('dashboard/spcat/update/{id}','Admin\SpecCatController@update');
Route::get('dashboard/spcat/destroy/{id}','Admin\SpecCatController@destroy');
Route::get('dashboard/video/destroy/{id}','Admin\VideoGalleryController@getDestroyAlbom');

Route::post('/errormailsend','Site\EmailFrom@postSend');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'sentry'] ,'prefix' => 'dashboard'], function ()
{
    //Route::resource('spcat', 'SpecCatController');
    Route::resource('video','VideoGalleryController');

    Route::resource('questanswer', 'QuestAnswerController');
    Route::resource('user', 'UserController');
    Route::resource('groups', 'GroupsController');
    Route::resource('encyclopedia', 'EncyclopediaController');
    Route::resource('encyclopediaCategory', 'EncyclopediaCategoryController');
    Route::resource('page', 'PageController');
    Route::resource('news', 'NewsController');
    Route::resource('art', 'ArticlesController');
    Route::resource('shares', 'SharesController');
    Route::resource('filemanager', 'FilemanagerController');
    Route::resource('', 'AdminController');
    Route::resource('special', 'SpecialistyController');

    Route::resource('options', 'OptionsController');
    Route::resource('feedback', 'FeedbackController');
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


    Route::resource('categoryanswer', 'CategoryAnswersController');

    Route::controller('gallery', 'GalleryController', [
        'getIndex' => 'dashboard.gallery.index',
        'getAdd' => 'dashboard.gallery.add'
    ]);




    Route::get('/wmenuindex', array('as' => 'wmenuindex','uses'=>'WmenuController@wmenuindex'));
    Route::post('/addcustommenu', array('as' => 'addcustommenu','uses'=>'WmenuController@addcustommenu'));
    Route::post('/deleteitemmenu', array('as' => 'deleteitemmenu','uses'=>'WmenuController@deleteitemmenu'));
    Route::post('/deletemenug', array('as' => 'deletemenug','uses'=>'WmenuController@deletemenug'));
    Route::post('/createnewmenu', array('as' => 'createnewmenu','uses'=>'WmenuController@createnewmenu'));
    Route::post('/generatemenucontrol', array('as' => 'generatemenucontrol','uses'=>'WmenuController@generatemenucontrol'));
    Route::post('/updateitem', array('as' => 'updateitem','uses'=>'WmenuController@updateitem'));


});





//API

Route::group(['namespace' => 'API', 'middleware' => 'cors','prefix' => 'api'], function()
{
    Route::resource('/news', 'NewsAPI');
    Route::resource('/shares', 'ShareAPI');
});




/*Route::group(['namespace' => 'test', 'prefix' => 'test'], function()
{
    Route::resource('/{model}/{function?}', 'TestController');

});*/


Route::get('socket', function () {
    return view('chat.socket');
});
Route::get('/consult', function () {
    return view('chat.consult');
});


