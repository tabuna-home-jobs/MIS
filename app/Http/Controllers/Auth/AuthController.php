<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//Для авторизации
use Sentry;
use Request;
use Input;
use Validator;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	//use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{

/*
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
*/

	}

	public function postReg(Request $request){

		Validator::make(Request::all(), [
			'email' => 'max:255',
			'name' => 'required|unique|max:255',
			'password' => 'required|min:6|',
			'password2' => Input::get('password'),
		]);

		dd(Request::all());

		Sentry::register(array(
			'email'    => Input::get('email'),
			'password' => Input::get('password'),
		));
	}
	public function getReg(){
		return view("dashboard/registrat");
	}


}
