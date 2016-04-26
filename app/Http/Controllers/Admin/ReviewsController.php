<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewsRequest;
use App\Models\Reviews;
use Session;

class ReviewsController extends Controller
{


    public function getIndex()
    {
        $ReviewsList = Reviews::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/reviews/reviews", ['ReviewsList' => $ReviewsList]);
    }


    public function getAdd($Reviews = null)
    {
        $Reviews = Reviews::find($Reviews);
        return view("dashboard/reviews/reviewsViews", ['Reviews' => $Reviews]);
    }

    //Добовление и изменение данных
    public function postIndex(ReviewsRequest $request)
    {
        $Reviews = Reviews::find($request->id);
        $Reviews->fio = $request->fio;
        $Reviews->content = $request->content;
        $Reviews->publish = $request->status;
        $Reviews->created_at = $request->created_at;
        $Reviews->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.reviews.index');
    }


    //Добавление отзыва
    public function getCreate()
    {
        return view("dashboard/reviews/create");
    }

    //Запись отзыва
    public function postStore(ReviewsRequest $request)
    {
        Reviews::create($request->all());
        //Флеш сообщение
        Session::flash('good', 'Вы успешно добавили отзыв');
        return redirect()->route('dashboard.reviews.index');
    }


    public function getRestore($Reviews = null)
    {
        Reviews::withTrashed()->find($Reviews)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('reviews');
    }


    //Удаление
    public function getDestroy($Reviews = null)
    {
        $page = Reviews::find($Reviews);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.reviews.index');
    }


    public function getUnset($Reviews = null)
    {
        Reviews::withTrashed()->find($Reviews)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('dashboard.reviews.index');
    }
}
