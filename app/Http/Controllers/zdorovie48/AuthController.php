<?php namespace App\Http\Controllers\zdorovie48;

use App\Events\SendMailAction;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ActionRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RepeatRequest;
use App\Models\Sites;
use Mail;
use Sentry;
use App\Models\User;

class AuthController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getLogin($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        //$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        return view('new' . $sitename . $sitedomen . '/login', []);
    }

    public function postLogin(AuthLoginRequest $request)
    {
        $phone = str_replace(['','-',' ','+'],'',$request->phone);
        $credentials = array(
            'phone' => $phone,
            'password' => $request->password,
        );
        Sentry::authenticateAndRemember($credentials);
        return redirect('/home');
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
            'middle_name'=> $request->middlename,
            'phone' => $request->phone,
            'birth' => $request->birth,
            'email' => $request->email,
            'password' => $request->password,
            //'activated' => TRUE,
        ));

        $activationCode = $user->getActivationCode();


        //$user = User::find($user->)

        $user->activation_code = str_limit($activationCode, $limit = 5,'');
        $user->save();

        event(new SendMailAction($user->activation_code, $request));
        return redirect('/auth/action');
    }


    public function getLogout()
    {
        Sentry::logout();
    }


    public function getAction($email = null, $activationCode = null)
    {
        if (is_null($email) || is_null($activationCode)) {
            return view('auth/action', ['email' => $email]);
        } else {
            $user = Sentry::findUserByLogin($email);
            if ($user->attemptActivation($activationCode)) {
                $adminGroup = Sentry::findGroupByName('User');
                $user->addGroup($adminGroup);
                Sentry::loginAndRemember($user);

                return redirect('/');
            } else {
                return redirect()->back()->withErrors(array('Ключ не подходит к email'));
            }
        }
    }

    public function postAction(ActionRequest $request)
    {
        $user = Sentry::findUserByLogin($request->email);
        if ($user->attemptActivation($request->key)) {
            $adminGroup = Sentry::findGroupByName('User');
            $user->addGroup($adminGroup);
            Sentry::loginAndRemember($user);

            return redirect('/');
        } else {
            return redirect()->back()->withErrors(array('Ключ не подходит к email'));
        }
    }


    public function getRepeat()
    {
        return view('auth/repeat');
    }

    public function postRepeat(RepeatRequest $request)
    {
        $user = Sentry::findUserByLogin($request->email);
        $activationCode = $user->getActivationCode();
        event(new SendMailAction($activationCode, $request));
        return redirect('/auth/action');
    }
}
