<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Feedback;
use App\Models\Goods;
use App\Models\News;
use App\Models\Page;
use Redirect;
use Request;
use Session;
use SMS;
use Validator;

class AdminController extends Controller
{


    public function index()
    {

        /*
        $test = new Ok(
            '1145219328', 'CBAKKDEFEBABABABA', '5A966F63D4B92D05D5EF69E9'
        );

        if (!$test->checkCurlSupport()){
            print "У вас не установлен модуль curl, который требуется для работы с SDK одноклассников";
            return;
        }
        else
        {
            dd('Хуканул: ключ, токен и сессию ');
        }
*/

        $goods = Goods::where('ids', '=', Session::get('website'))->count();
        $news = News::where('ids', '=', Session::get('website'))->count();
        $pages = Page::where('ids', '=', Session::get('website'))->count();

        $CommentsGood = Comments::whereRaw('ids = ? and publish = ?', [Session::get('website'), 'true'])->count();
        $CommentsAll = Comments::where('ids', '=', Session::get('website'))->count();

        if ($CommentsAll != 0) {
            $Comments = round($CommentsGood / $CommentsAll * 100);
        } else {
            $Comments = 100;
        }


        $feedbacksGood = Feedback::whereRaw('ids = ? and read = ?', [Session::get('website'), 'true'])->count();
        $feedbacksAll = Feedback::where('ids', '=', Session::get('website'))->count();

        if ($feedbacksAll != 0) {
            $feedbacks = round($feedbacksGood / $feedbacksAll * 100);
        } else {
            $feedbacks = 100;
        }


        return view("dashboard/home", [
            'Page' => $pages,
            'News' => $news,
            'Goods' => $goods,
            'Comments' => $Comments,
            'Feedbacks' => $feedbacks,
        ]);
    }
}
