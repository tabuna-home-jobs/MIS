<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedBackSend;
use App\Models\Feedback;
use App\Models\Sites;
use Mail;
use Redirect;
use Request;
use Session;
use Validator;

class FeedbackController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {

        $Feedback = Feedback::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/feedback/feedback",['Feedback' => $Feedback ]);
    }


    public function getView($Feedback = null)
    {
        $Feedback = Feedback::find($Feedback);
        $Feedback->read = true;
        $Feedback->save();
        return view("dashboard/feedback/view",['Feedback' => $Feedback ]);
    }


    public function getNoready(){
        $Feedback = Feedback::whereRaw('ids = ? and read = ?', [Session::get('website'), false])->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/feedback/noready", ['Feedback' => $Feedback]);
    }


    public  function  getRestore($Feedback = null)
    {
        Feedback::withTrashed()->find($Feedback)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('feedback');
    }

    public function getTrash()
    {
        $Feedback = Feedback::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/feedback/trash", ['Feedback' => $Feedback]);
    }

    //Удаление
    public function getDestroy($Feedback = null)
    {
        $Feedback = Feedback::find($Feedback);
        $Feedback->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('feedback');
    }

    public  function  getUnset($Feedback = null)
    {
        Feedback::withTrashed()->find($Feedback)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('feedback');
    }



    public  function  getSend($Email= null)
    {
        $Feedback = Feedback::whereRaw('ids = ? and id = ?', [Session::get('website'), $Email])->first();
        return view("dashboard/feedback/send", ['Feedback' => $Feedback]);
    }


    public function postSend(FeedBackSend $request)
    {
        $sites = Sites::find( Session::get('website' ) );

        Mail::raw($request->contentmess, function($message) use ($sites, $request)
        {
            $message->from($sites->email, $sites->name);

            $message->to($request->email );
        });
        Session::flash('good', 'Вы успешно отправили письмо');
        return redirect()->route('feedback');

    }




}
