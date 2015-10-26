<?php namespace App\Http\Controllers\Admin;

use App\Console\Commands\AppointmentsCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\SurveysRequest;
use App\Models\Question;
use App\Models\Surveys;
use Redirect;
use Request;
use Session;
use App\Models\Answers;

class SurveysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $Survey = Surveys::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }


    public function getShow($id)
    {
        $quests = Surveys::whereRaw('ids =' . Session::get('website') . ' and id =' . $id)->first()->quest()->paginate(15);
        return view("dashboard/surveys/questions", ['quests' => $quests, 'surveysID' => $id]);
    }

    public function getShowquest($id)
    {
        $quests = Question::find($id);
        return view("dashboard/surveys/showquest", ['quests' => $quests]);
    }


    public function postStore(QuestionRequest $request)
    {

        $newQuest = new Question([
            'quest' => $request->quest,
            'type' => $request->type,
            'answer' => serialize($request->fieldsAttr),
            'surveys_id' => $request->surveysID
        ]);

        $newQuest->save();
        Session::flash('good', 'Вы успешно создали вопрос');
        return redirect()->back();

    }


    public function postUpdate()
    {

        $newQuest = Question::find(Request::get('id'));
        $newQuest->fill(Request::all());
        $newQuest->answer = serialize(Request::get('fieldsAttr'));
        $newQuest->save();
        Session::flash('good', 'Вы успешно создали вопрос');
        return redirect()->back();

    }



    public function postAdd(SurveysRequest $request)
    {
        $Survey = new Surveys([
            'name' => $request->name,
            'ids' => Session::get('website'),
        ]);
        $Survey->save();
        Session::flash('good', 'Вы успешно создали значения');
        return redirect()->route('surveys');
    }


    public function getDestroy($id)
    {
        $page = Surveys::find($id);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('surveys');
    }

    public function getDestroyquest($id)
    {
        $page = Question::find($id);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->back();
    }




    public function getShowstatquest($id)
    {
        $quest = Question::find($id);
        $Answers = Answers::where('surveys_id', $quest->surveys_id)->get();

        //Общая коллекция
        $collection = collect();

        foreach($Answers as $Answ)
        {
            $AnswerThis = unserialize($Answ->answer);
            $collection->push($AnswerThis[$id]); // Добавляем элементы к коллекции
        }

        $collection = array_flatten($collection); //Делаем массив плоским

        if(is_array($collection)) {
            $collection = array_count_values($collection); // Узнаём количество повторяющихся элементов массива
            arsort($collection, SORT_NUMERIC);
        }
        return view("dashboard/surveys/statsQuest", ['collection' => $collection, 'quest' => $quest]);
    }


    public function getAnserusers($id)
    {
        $Answers = Answers::where('surveys_id', $id)->paginate(15);
        return view("dashboard/surveys/answerList", ['Answers' => $Answers]);
    }


    public function getAnsertquest($id)
    {
        $Answers = Answers::find($id);
        $Quest = new Question;
        return view("dashboard/surveys/answerUser", ['Answers' => $Answers, 'Quest' => $Quest]);
    }



}