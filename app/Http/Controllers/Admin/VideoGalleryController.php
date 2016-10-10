<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video as Video;
use App\Models\VideoAlbum as Album;
use Illuminate\Http\Request;
use Image;
use Session;

class VideoGalleryController extends Controller
{

    public function index()
    {
        $AlbumList = Album::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/Video/gallery", ['AlbumList' => $AlbumList]);
    }


    public function create()
    {
        return view("dashboard/Video/galleryCrud");
    }


    public function store(Request $request)
    {
        if ($request->id) {
            $alb = $AlbumPhoto = Album::find($request->id);

            if ($request->hasFile('url')) {
                Image::make($request->file('url'))->save('upload/' . time() . '.' . $request->file('url')->getClientOriginalExtension());
                $alb->poster = '/upload/' . time() . '.' . $request->file('url')->getClientOriginalExtension();
            } else {
                $alb->poster = '/upload/no_img.png';
            }

            $alb->name = $request->name;
            $alb->ids = Session::get('website');
            $alb->save();
        } else {
            $alb = new Album();

            if ($request->hasFile('url')) {
                Image::make($request->file('url'))->save('upload/' . time() . '.' . $request->file('url')->getClientOriginalExtension());
                $alb->poster = '/upload/' . time() . '.' . $request->file('url')->getClientOriginalExtension();
            } else {
                $alb->poster = '/upload/no_img.png';
            }

            $alb->name = $request->name;
            $alb->ids = Session::get('website');
            $alb->save();
        }

        return redirect('dashboard/video');
    }


    public function show($id)
    {
        $AlbumPhoto = Album::whereRaw('id = ? and ids = ? ',
            [$id, Session::get('website')])->first()->getVideo()->orderBy('id', 'desc')->paginate(8);
        return view("dashboard/Video/Video", ['AlbumPhoto' => $AlbumPhoto, 'Album' => $id]);
    }


    public function edit($id)
    {
        $Album = Album::whereRaw('id = ? and ids = ? ', [$id, Session::get('website')])->first();
        return view("dashboard/Video/galleryCrud", ['Album' => $Album]);
    }


    public function update(Request $request, $id)
    {
        if ($request->id) {
            $video = Video::find($request->id);
            $video->ids = Session::get('website');
            $video->code = $request->code;
            $video->album_id = $request->album_id;
            $video->name = $request->name;
            $video->save();
            return redirect('dashboard/video/' . $request->album_id . '');
        } else {
            $video = new Video();
            $video->ids = Session::get('website');
            $video->code = $request->code;
            $video->album_id = $request->album_id;
            $video->name = $request->name;
            $video->save();
            return redirect('dashboard/video/' . $request->album_id . '');
        }
    }


    public function destroy(Request $request, $id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect('dashboard/video/' . $request->album_id . '');
    }

    public function getDestroyAlbom($id)
    {
        $album = Album::find($id);
        $album->getVideo()->delete();
        $album->delete();
        return redirect('dashboard/video');
    }
}
