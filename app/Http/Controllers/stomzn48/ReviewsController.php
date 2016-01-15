<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ReviewsRequest;
use App\Models\Sites;
use Session;
use App\Models\Reviews;

class ReviewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename, $sitedomen)
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Reviews = $getSites->getReviews()->where('publish', true)->orderBy('id', 'desc')->paginate(6);
        return view($sitename . $sitedomen . '/reviews', ['Reviews' => $Reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($sitename, $sitedomen, ReviewsRequest $requests)
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Reviews = new Reviews([
            'fio' => $requests->fio,
         //   'content' => $requests->content,
            'publish' => 0
        ]);
        $getSites->getReviews()->save($Reviews);

        Session::flash('good', 'Спасибо, что написали, ваше мнение очень важно для нас.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
