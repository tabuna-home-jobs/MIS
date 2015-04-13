<?php namespace App\Http\Middleware;

use Closure;
use Sentry;

class Dashboard {



    public function __construct()
    {

    }


    public function handle($request, Closure $next)
    {

        if ( ! Sentry::check())
        {
            if ($request->ajax())
                return response('Unauthorized.', 401);
            else
                return redirect()->guest('auth/login');
        }
        else
        {
            // User Пользователь авторизован
            return $next($request);
        }

    }

}
