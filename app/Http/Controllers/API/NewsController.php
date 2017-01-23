<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Facades\Search;

class NewsController extends Controller
{
    /**
     * @api {get} /api/news 'Список новостей'
     * @apiName getNews
     * @apiGroup News
     *
     * @apiDescription  Получить список новостей
     *
     * @apiSuccess {integer} id Уникальный итендификатор.
     * @apiSuccess {String} name  Название новости.
     * @apiSuccess {String} descript  Короткое описание.
     * @apiSuccess {String} avatar  Путь до изображения.
     * @apiSuccess {String} created_at  Дата создания.
     *
     *
     * @apiSuccessExample Успешный ответ:
     *     HTTP/1.1 200 OK
     *     {
     *       "total": "222",
     *       "per_page": "15",
     *       "current_page": "1",
     *       "last_page": "15",
     *       "next_page_url": "http://localhost:8000/api/news?page=2",
     *       "prev_page_url": null,
     *       "from":1,
     *       "to": 15,
     *       "data": {
     *              '0':{
     *              'id': 391,
     *              'name': 'Изменение цены',
     *              'descript': 'Внимание! Уважаемые клиенты!',
     *              'avatar' :  '/upload/1482831183.jpg',
     *              'created_at': '0027-12-20 16:00:00',
     *              }
     *     }
     *
     * @apiError NotFound Если нет ни каких сведений о новостях.
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "total": "0",
     *       "per_page": "15",
     *       "current_page": "1",
     *       "last_page": "0",
     *       "next_page_url": null,
     *       "prev_page_url": null,
     *       "from":1,
     *       "to": 0,
     *       "data": {}
     *     }
     *
     */
    public function index(Request $request)
    {
        if(!$request->has('search')) {
            $news = News::selectRaw('id as _id,name,descript,avatar,created_at')
                ->where('ids', 2)
                ->orderBy('id', 'desc')
                ->paginate($request->get('paginate'));
        }
        else{
            $news = Search::news($request->get('search'));
            $news = $news
                ->where('ids', 2)
                ->sortByDesc('id');


            $news->transform(function ($item,$key){
                $item->_id = $item->id;
                return $item;
            });

        }


        return response()->json($news);
    }




    /**
     * @api {get} /api/news/:id 'Новость'
     * @apiName getNew
     * @apiGroup News
     *
     *
     * @apiDescription  Получить  новость
     *
     *  * @apiParam {Number} id Уникальная запись новости.
     *
     * @apiSuccess {integer} id Уникальный итендификатор.
     * @apiSuccess {String} title  Заголовок новости.
     * @apiSuccess {String} name  Название новости.
     * @apiSuccess {String} content  Содержимое новости.
     * @apiSuccess {String} descript  Короткое описание.
     * @apiSuccess {String} avatar  Путь до изображения.
     * @apiSuccess {String} created_at  Дата создания.
     *
     *
     *
     */
    public function show(News $news)
    {
        $news->_id = $news->id;
        unset($news->id);
        return response()->json($news);
    }


    /**
     * @api {get} /api/news/search 'Новость'
     * @apiName searchNew
     * @apiGroup News
     *
     * @param SearchRequest $request
     */
    public function search(SearchRequest $request){

    }


}
