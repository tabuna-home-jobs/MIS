<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shares;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    /**
     * @api {get} /api/shares 'Список акций'
     * @apiName getShares
     * @apiGroup Share
     *
     * @apiDescription  Получить список акций
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
     *       "next_page_url": "http://localhost:8000/api/share?page=2",
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
     * @apiError NotFound Если нет ни каких сведений о акциях.
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
        $shares = Shares::selectRaw('id as _id,name,descript,avatar,created_at')
            ->where('ids', 2)
            ->orderBy('id', 'desc')
            ->paginate($request->get('paginate'));
        }
        else{
            $shares = Search::shares($request->get('search'));
            $shares = $shares
                ->where('ids', 2)
                ->sortByDesc('id');

            $shares->transform(function ($item,$key){
                $item->_id = $item->id;
                return $item;
            });

        }


        return response()->json($shares);
    }

    /**
     * @api {get} /api/shares/:id 'Акция'
     * @apiName getShare
     * @apiGroup Share
     *
     *
     * @apiDescription  Получить  акцию
     *
     *  * @apiParam {Number} id Уникальная запись акции.
     *
     * @apiSuccess {integer} id Уникальный итендификатор.
     * @apiSuccess {String} title  Заголовок акции.
     * @apiSuccess {String} name  Название акции.
     * @apiSuccess {String} content  Содержимое акции.
     * @apiSuccess {String} descript  Короткое описание.
     * @apiSuccess {String} avatar  Путь до изображения.
     * @apiSuccess {String} created_at  Дата создания.
     *
     *
     *
     */
    public function show(Shares $share)
    {
        $share->_id = $share->id;
        unset($share->id);
        return response()->json($share);
    }
}
