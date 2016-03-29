@extends('sokzn48ru/ALTheader')

@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>Услуги</h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="luchiki-margin-top-35">
            <div class="container clearfix">
                <div class="blog-wrapper">
                    <div class="clearfix">
                        <article id="post-">
                            <div class="about-us-padding">
                                <div class="row">
                                    <div class="gallery-wrapper gallery-infinite-scroll">

                                    <!-- photo -->
                                    <div class="col-xs-12 service-wrapper">

                                       <h2>Фотоальбомы</h2>

                                        @forelse($albums as $album)
                                            <div class="gallery-item gallery-col-3 service-img">
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
                                    <!-- end photo -->




                                    <!-- video -->
                                    <div class="col-xs-12 service-wrapper">
                                        <h2>Видеоальбомы</h2>
                                            @forelse($videoalbums as $album)

                                                <div class="gallery-item gallery-col-3 service-img">
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
                                    <!-- end video -->



                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection


