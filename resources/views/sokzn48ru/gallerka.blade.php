@extends('sokzn48ru/ALTheader')
@section('content')


    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading"><h2>{{$album->name}}</h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box luchiki-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">


                                    <div class="luchiki-gallery">


                    <div  class="gallery-wrapper gallery-infinite-scroll">

                    @forelse($photos as $photo)

                        <div class="gallery-item gallery-col-3">
                            <div class="entry-thumbnail title">
                                <img src="{{$photo['url']}}">

            <!--Описание фотоальбома-->
            <div class="entry-thumbnail-hover">
                <div class="entry-hover-wrapper">
                    <div class="entry-hover-inner">
                        <a href="{{$photo['url']}}" class="fancybox" rel="gallery{{$photo['album_id']}}">
                            <h4 class="class-name">Посмотреть</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!--Описание фотоальбома-->
                            </div>
                        </div>
                    @empty
                        <p>Нет фотографий</p>
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
