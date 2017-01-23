<?php

namespace App\Http\Controllers\API;

use App\Models\Goods;
use App\Models\GoodsGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Cache;

class ServiceController extends Controller
{
    /**
     * @api {get} /api/service/category 'Список категорий'
     * @apiName getCategory
     * @apiGroup Service
     *
     *
     * @param Request $request
     * @return mixed
     */
    public function getCategory(Request $request){
        $Category = Category::
        selectRaw('id as _id, title,name,text,avatar,tag,descript,ids,created_at,updated_at,deleted_at,_lft,_rgt,parent_id')
            ->where('ids',2)
            ->paginate($request->get('paginate'));
        return response()->json($Category);
    }


    /**
     * @api {get} /api/service 'Услуги'
     * @apiName getService
     * @apiGroup Service
     *
     * @param Request $reque
     *st
     * @return mixed
     */
    public function getIndex(Request $request){
        $service = Goods::selectRaw('id as _id, name ,category_id,parent_id,sort,slug')
            ->where(function ($query) use ($request){
                $query->where('ids', 2);

                if($request->has('category_id')){
                    $query->where('category_id',$request->get('category_id'));
                }


            })
            ->orderBy('sort', 'ASC')
            ->paginate($request->get('paginate'));
        return response()->json($service);
    }


    /**
     * @param int $good_id
     * @return mixed
     */
    public function getShow($good_id)
    {
        $good = Goods::findOrFail($good_id);
        $good->_id = $good->id;
        unset($good->id);
        return response()->json($good);
    }


    /**
     * @api {get} /api/service/complex 'Комплексные услуги'
     * @apiName getComplexService
     * @apiGroup Service
     *
     * @param Request $request
     * @param null $id
     * @return mixed
     */
    public function getComplex(Request $request, $id = null){

        if(is_null($id)) {
            $service = GoodsGroup::selectRaw('id as _id, name, category_id, sort, slug,avatar')
                ->where(function ($query) use ($request) {
                    $query->where('ids', 2);

                    if ($request->has('category_id')) {
                        $query->where('category_id', $request->get('category_id'));
                    }


                })
                ->orderBy('id', 'desc')
                ->paginate($request->get('paginate'));
        }else{
            $service = GoodsGroup::with('subgoods')
                ->where('id',$id)
                ->where('ids', 2)
                ->first();


            $service->_id = $service->id;
            unset($service->id);

            foreach ($service->subgoods as $item){
                $item->_id = $item->id;
                unset($item->id);
            }


        }
        return response()->json($service);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function getTree(Request $request){

        $tree = Cache::remember('category-api-tree'.$request->fullUrl(),60 , function () use ($request){

            $tree = Goods::selectRaw('id, id as _id, name,avatar,category_id,price,sort,parent_id')
                ->where('ids', 2)
                //->whereIsRoot()
                ->orderBy('sort','ASC');

            if($request->has('category_id')) {
                $tree = $tree->where('category_id', $request->get('category_id'));
            }

            return $tree->get()->toTree();
        });

        return response()->json($tree);
    }


}
