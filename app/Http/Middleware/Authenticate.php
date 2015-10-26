<?php namespace App\Http\Middleware;

use Closure;
use Sentry;
use Session;

class Authenticate {



	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (!Sentry::check())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
                return redirect('auth/login');
			}
		}

        //Проверка сайтов
        if (!Session::has('website'))
        {
            if ($request->ajax())
            {
                //Тут должен быть обработчик для ajax запросов
            }
            else
            {
                return redirect()->route('sites');
            }
        }




		return $next($request);
	}

}
