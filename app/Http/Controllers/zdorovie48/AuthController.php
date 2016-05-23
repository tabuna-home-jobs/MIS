<?php namespace App\Http\Controllers\zdorovie48;

use App\Events\SendMailAction;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ActionRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RepeatRequest;
use App\Models\Group;
use App\Models\Sites;
use App\Models\User;
use Mail;
use Route;
use Sentry;

class AuthController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getLogin($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {
            //$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
            return view('new' . $sitename . $sitedomen . '/auth/login', []);
        }
    }

    public function postLogin(AuthLoginRequest $request)
    {
        if (Sentry::check()) {
            //return redirect('/cabinet');
           return $this->roleRedirect();
        } else {
            $phone = str_replace(['', '-', ' ', '+'], '', $request->phone);
            $credentials = array(
                'phone' => $phone,
                'password' => $request->password,
            );
            $this->authenticateAndRemember($credentials);
          return $this->roleRedirect();
        }
    }



    public function roleRedirect()
    {
        $admin = Group::where('name','Administrator')->first();
        if(Sentry::getUser()->inGroup($admin))
        {
            return redirect('/dashboard');
        }
        else{
            return redirect('/cabinet');
        }
    }





    private function authenticateAndRemember($credentials)
    {
        try {
            Sentry::authenticateAndRemember($credentials);
        } catch (\Cartalyst\Sentry\Users\LoginRequiredException $e) {
            echo 'Поле телефон обязательно для заполнения.';
        } catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            echo 'Поле пароль обязательно для заполнения.';
        } catch (\Cartalyst\Sentry\Users\WrongPasswordException $e) {
            echo 'Неправильный пароль, попробуйте еще раз.';
        } catch (\Cartalyst\Sentry\Users\UserNotFoundException $e) {
            echo 'Пользователь не найден.';
        } catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            echo 'Пользователь не активирован.';
        } catch (\Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
            echo 'Действие пользователя приостановлено.';
        } catch (\Cartalyst\Sentry\Throttling\UserBannedException $e) {
            echo 'Пользователь заблокирован.';
        }
    }

    public function getRegister($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {
            return view('new' . $sitename . $sitedomen . '/auth/register');
        }
    }


    public function postRegister(AuthRequest $request, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {
            // Create the user
            $phone = str_replace(['', '-', ' ', '+'], '', $request->phone);
            $user = Sentry::createUser(array(
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'phone' => $phone,
                'birth' => $request->birth,
                'email' => $request->email,
                'password' => $request->password,
                //'activated' => TRUE,
            ));

            $activationCode = $user->getActivationCode();

            $user->activation_code = str_limit($activationCode, $limit = 5, '');
            $user->save();

            event(new SendMailAction($user->activation_code, $phone));
        }
        return redirect('/auth/action');
    }


    public function getLogout($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        Sentry::logout();
        return view('new' . $sitename . $sitedomen . '/auth/login', []);
    }


    public function getAction($email = null, $activationCode = null, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {

        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {

            if (is_null($email) || is_null($activationCode)) {
                return view('new' . $sitename . $sitedomen . '/auth/action', ['email' => $email]);
            } else {
                $user = Sentry::findUserByLogin($email);
                if ($user->attemptActivation($activationCode)) {
                    $adminGroup = Sentry::findGroupByName('User');
                    $user->addGroup($adminGroup);
                    Sentry::loginAndRemember($user);

                    return redirect('/cabinet');
                } else {
                    return redirect()->back()->withErrors(array('Ключ не подходит к номеру телефона'));
                }
            }
        }
    }

    public function postAction(ActionRequest $request)
    {
        $user = Sentry::findUserByLogin($request->phone);
        if ($user->attemptActivation($request->key)) {
            $adminGroup = Sentry::findGroupByName('User');
            $user->addGroup($adminGroup);
            Sentry::loginAndRemember($user);

            return redirect('/cabinet');
        } else {
            return redirect()->back()->withErrors(array('Ключ не подходит к номеру телефона'));
        }
    }


    public function getRepeat($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {

            return view('new' . $sitename . $sitedomen . '/auth/repeat');
        }
    }

    public function postRepeat(RepeatRequest $request, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (Sentry::check()) {
            return redirect('/cabinet');
        } else {
            $phone = str_replace(['', '-', ' ', '+'], '', $request->phone);
            $user = Sentry::findUserByLogin($request->email);
            $activationCode = $user->getActivationCode();
            event(new SendMailAction($activationCode, $phone));
            return redirect('new' . $sitename . $sitedomen . '/auth/action');
        }
    }
}
