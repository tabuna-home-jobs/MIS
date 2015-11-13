<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AlbumRequest;
use App\Http\Requests\Admin\PhotoRequest;
use App\Models\Album;
use App\Models\Photo;
use Redirect;
use Request;
use Session;
use Validator;
use Image;

class GalleryController extends Controller {

    public function getIndex()
    {
        $AlbumList = Album::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/gallery/gallery", ['AlbumList' => $AlbumList]);
    }

    public function getAdd($album = null)
    {
        $album = Album::find($album);

        return view("dashboard/gallery/galleryCrud", ['Album' => $album ]);
    }


    public function getTrash()
    {
        $AlbumList = Album::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/gallery/trash", ['AlbumList' => $AlbumList]);
    }


    public function  getRestore($Album = null)
    {
        Album::withTrashed()->find($Album)->restore('cascade');
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('dashboard.gallery.index');
    }


    public  function  getUnset($Album = null)
    {
        Page::withTrashed()->find($Album)->forceDelete('cascade');
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('dashboard.gallery.index');
    }

    //Добовление и изменение данных
    public function postIndex(AlbumRequest $request)
    {

        if(!is_null($request->id))
            $album = Album::find($request->id);
        else
            $album = new Album();

        $album->name = $request->name;
        $album->ids = Session::get('website');
        $album->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.gallery.index');
    }



    //Удаление
    public function getDestroy($Album = null)
    {
        $Album = Album::find($Album);
        $Album->delete('cascade');
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.gallery.index');
    }


    public function getShow($id)
    {
        $AlbumPhoto = Album::whereRaw('id = ? and ids = ? ',[$id,Session::get('website')])->first()->getPhoto()->orderBy('id', 'desc')->paginate(8);
        return view("dashboard/gallery/Photo", ['AlbumPhoto' => $AlbumPhoto, 'Album' => $id]);
    }


    public function postPhoto(PhotoRequest $request)
    {
        if(!is_null($request->id))
            $photo = Photo::find($request->id);
        else
            $photo = new Photo();


        if (Request::hasFile('url')) {
            Image::make(Request::file('url'))->save('upload/' . time() . '.' . Request::file('url')->getClientOriginalExtension());
            $photo->url = '/upload/' . time() . '.' . Request::file('url')->getClientOriginalExtension();
        }


        $photo->photoalbum_id = $request->album;
        $photo->ids = Session::get('website');
        $photo->videourl = $request->videourl;
        $photo->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->back();
    }


    public function getDeletephote($id)
    {
        $album = Photo::whereRaw('id = ? and ids = ?',[$id, Session::get('website')])->first();
        $album->forceDelete();
        Session::flash('good', 'Вы успешно удалили запись');
        return redirect()->back();

    }


}
