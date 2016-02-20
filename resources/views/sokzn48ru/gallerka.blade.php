@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>
                    {{$album->name}}

                </h1>
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

                                <div  class="gallery-wrapper gallery-infinite-scroll">

                                    @forelse($photos as $photo)

                                        <div class="gallery-item  gallery-item-fix col-md-3 col-sm-6 col-xs-12">
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
                                    <div class="clearfix"></div>



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
