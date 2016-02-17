@extends('luchiki48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Фото-Видео Галерея</h1>
            <div class="page-text">
                <div class="row">
                   <!-- @foreach($photos as $item)
                        <div class="col-md-3 item-galery">
                            <div>
                                <a class="fancybox" rel="group" href="{{$item->url}}"><img src="{{$item->url}}" alt="" /></a>
                            </div>
                        </div>
                    @endforeach -->
                </div>

                    <div class="cupid-gallery row">


                        <h2>Фотоальбомы</h2>
                        <div  class="gallery-wrapper gallery-infinite-scroll">

                            @forelse($albums as $album)
                                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail title">
                                        <img src="{{$album['poster']}}" alt="{{$album['name']}}">

                                        <!--Описание фотоальбома-->
                                        <div class="entry-thumbnail-hover">
                                            <div class="entry-hover-wrapper">
                                                <div class="entry-hover-inner">
                                                    <a href="/gallery/{{$album['id']}}"  title="{{$album['name']}}">
                                                        <h5 class="class-name">{{$album['name']}}</h5>
                            <span class="excerpt">
                                <!--тут можно добавить описание-->
                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Описание фотоальбома-->
                                    </div>
                                </div>
                            @empty
                                <p>Нет фотоальбомов</p>
                            @endforelse



                        </div>
                    </div>

                    <div class="cupid-gallery row">
                        <h3>Видеоальбомы</h3>

                        <div  class="gallery-wrapper gallery-infinite-scroll">

                            @forelse($videoalbums as $album)

                                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail title">
                                        <img src="{{$album['poster']}}" alt="{{$album['name']}}">

                                        <!--Описание альбома-->
                                        <div class="entry-thumbnail-hover">
                                            <div class="entry-hover-wrapper">
                                                <div class="entry-hover-inner">
                                                    <a href="/video/{{$album['id']}}"  title="{{$album['name']}}">
                                                        <h5 class="class-name">{{$album['name']}}</h5>
                            <span class="excerpt">
                                <!--тут можно добавить описание-->
                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Описание альбома-->
                                    </div>
                                </div>
                            @empty
                                <p>Нет видеоальбомов</p>
                            @endforelse



                        </div>
                    </div>

            </div>
        </div>

    </div>

@endsection
