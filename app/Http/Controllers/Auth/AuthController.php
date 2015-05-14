<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
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

        try {
            $credentials = array(
                'email' => $request->email,
                'password' => $request->password,
            );
            Sentry::authenticateAndRemember($credentials);


        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            echo 'Login field is required.';
        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            echo 'Password field is required.';
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            dd('stop');
            echo 'Wrong password, try again.';
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            echo 'User was not found.';
        } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            echo 'User is not activated.';
        } // The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
            echo 'User is suspended.';
        } catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
            echo 'User is banned.';
        }

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
            'activated' => TRUE,
        ));

        $userGroup = Sentry::findGroupByName('User');
        $user->addGroup($userGroup);
        Sentry::loginAndRemember($user);
        return redirect()->route('/dashboard');
    }


    public  function getLogout()
    {
        Sentry::logout();
    }

}
