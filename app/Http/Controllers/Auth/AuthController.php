<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
use Mail;
use Sentry;

class AuthController extends Controller {

	/**
     * Display a listing of the resource.
	 *
     * @return Response
	 */
    public function getLogin()
	{
        return view('auth/login');
    }

    public function postLogin(AuthLoginRequest $request)
    {


        $credentials = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        Sentry::authenticateAndRemember($credentials);

        return redirect('/dashboard');

	}


    public function getRegister()
    {
        return view('auth/register');
    }


    public function postRegister(AuthRequest $request)
    {
        // Create the user
        $user = Sentry::createUser(array(
            'first_name' => $request->name,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            //'activated' => TRUE,
        ));

        $activationCode = $user->getActivationCode();

        Mail::send('mail/activate', ['activationCode' => $activationCode, 'email' => $request->email], function ($message) use ($request) {
            $message->from('us@example.com', 'Laravel');
            $message->to($request->email)->cc($request->email);

        });

        //$userGroup = Sentry::findGroupByName('User');
        //$user->addGroup($userGroup);
        //Sentry::loginAndRemember($user);
        return redirect()->route('/auth/action/' . $request->email);
    }


    public  function getLogout()
    {
        Sentry::logout();
    }


    public function anyAction($email = null, $activationCode = null)
    {
        if (is_null($email) || is_null($activationCode))
            return view('auth/action', ['email' => $email]);
        else {
            $user = Sentry::findUserByLogin($email);
            if ($user->attemptActivation($activationCode)) {
                dd('Вы активировали пользователя туту его надо перебросить значит');
            } else {
                return redirect()->back()->withErrors(array('Ключ не подходит к email'));
            }
        }
    }


    public function anyReset()
    {
        return view('auth/reset');
    }


}
