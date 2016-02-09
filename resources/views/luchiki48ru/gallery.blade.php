@extends('luchiki48ru/ALTheader')
@section('content')


    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
                    <h2>
                        Фото-Видео Галерея
                    </h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>

        <main role="main" class="site-content">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box cupid-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">


                            <div class="cupid-gallery row">


                                <h3>Фотоальбомы</h3>
                            <div  class="gallery-wrapper gallery-infinite-scroll">

                                @forelse($albums as $album)
                                <div class="gallery-item gallery-col-3">
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

                                    <div class="gallery-item gallery-col-3">
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
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
