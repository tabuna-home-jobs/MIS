@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                    <h1>Фото-Видео Галерея</h1>
            </div>
        </div>
    </section>



    <section class="container">


        <div class="wrapper-md">
            <div class="row">
                <div class="col-sm-9">
                    <div class="blog-post">
                        <div class="panel">
                            <div class="wrapper-lg">
                                <div class="row">

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
                    </div>
                </div>
                <div class="col-sm-3">
                    @if(isset($LastNews))
                        @include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
                    @endif
                </div>
            </div>
        </div>



    </section>




@endsection
