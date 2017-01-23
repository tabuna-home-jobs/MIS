<?php namespace App\Providers;

use App;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);


        $router->model('encyclopediaCategory', 'App\Models\EncyCategory');
        $router->model('page', 'App\Models\Page');
        $router->model('news', 'App\Models\News');
        $router->model('art', 'App\Models\Articles');
        $router->model('shares', 'App\Models\Shares');
        $router->model('share', 'App\Models\Shares');
        $router->model('special', 'App\Models\Specialisty');
        $router->model('encyclopedia', 'App\Models\EncyPost');
        $router->model('medencyclopedia', 'App\Models\EncyCategory');
        $router->model('encypost', 'App\Models\EncyPost');
        $router->model('block', 'App\Models\Block');

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
