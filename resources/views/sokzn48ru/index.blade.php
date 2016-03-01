@extends('sokzn48ru.app')


@section('content')



    <section class="well well-lg main-bg text-white h-full m-b-none">


        <div class="container text-center">
            <div class="lead">
                <h1 class="fa fa-5x icon-soc-logo"></h1>

                <p>
                    <small class="text-white">семейный оздоровительный комплекс</small>
                </p>
            </div>


            <div class="row  hidden-sm-down">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="/service?category=106" class="square-block">
                        <span class="fa fa-5x icon-soc-embrion"></span>

                        <p class="text-uppercase">До рождения</p>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="/service?category=109" class="square-block">
                        <span class="fa fa-5x icon-soc-baby"></span>

                        <p class="text-uppercase">ДЕТСТВО</p>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="/service?category=110" class="square-block">
                        <span class="fa fa-5x icon-soc-osob"></span>

                        <p class="text-uppercase">ОСОБЕННЫЕ ДЕТИ</p>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="/service?category=111" class="square-block">
                        <span class="fa fa-5x icon-soc-vzrosl"></span>

                        <p class="text-uppercase">ВЗРОСЛЕНИЕ</p>
                    </a>
                </div>
            </div>


        </div>
    </section>



    <section id="features" class="container-fluid bg-white-only">
        <div class="row">
            <div class="container">


                <div class="col-sm-4 wrapper-xl">
                    <div class="m-t-xxl text-center">
                        <span class="text-2x text-muted"><i class="fa fa-futbol-o text-2x"></i></span>
                        <span class="text-3x text-muted"><span class="text-2x"><i
                                        class="fa fa-child text-2x"></i></span></span>
                        <span class="text-3x text-muted"><i class="fa fa-rocket text-2x"></i></span>
                    </div>
                </div>


                <div class="col-sm-8 wrapper-xl">
                    <h3 class="text-dark font-bold m-b-lg">Акции оздоровительного комплекса</h3>
                    <ul class="list-unstyled  m-t-xl">

                        @foreach($getShares as $share)
                            <li>
                                <i class="fa fa-star-o pull-left text-lg m-r m-t-sm"></i>

                                <p class="clear m-b-lg"><a href="/shares/{{$share->id}}"><strong>{{$share->name}}</strong></a>
                                    {{str_limit(strip_tags($share->content), 100, '...')}}
                                </p>
                            </li>
                        @endforeach
                    </ul>

                    <p class="text-center">
                        <a class="btn btn-white text-info b-info bg-empty" href="/shares">все акции</a>
                    </p>

                </div>
            </div>
        </div>
    </section>









    <section class="bg-info text-center">
        <div class="container padder-v">
            <h1 class="text-uppercase text-while padder-v">НАШИ ПРЕИМУЩЕСТВА</h1>

            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x  fa-2x icon-soc-ages"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>


            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x   fa-2x icon-soc-ages"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>


            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x   fa-2x icon-soc-money"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>


            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x  fa-2x icon-soc-list"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>


            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x  fa-2x icon-soc-ages"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>


            <div class="col-md-2">
                <p class="h3 m-b-md inline b b-light rounded wrapper-lg">
                    <i class="fa w-1x   fa-2x icon-soc-ages"></i>
                </p>

                <div class="m-b-xl">
                    <h5 class="m-t-none">Высокое качество
                        услуг</h5>
                </div>
            </div>





        </div>
    </section>


    <section class="container main-news padder-v text-center">

        <h2 class="header-h padder-v">Новости комплекса</h2>


        <div class="row">


            @foreach($getNews as $news)
                <div class="col-md-3">
                    <div class="blog-post">
                        <div class="panel">
                            <a href="/blog/{{$news->id}}"> <img src="{{$news->avatar}}" class="img-full"></a>

                            <div class="wrapper-lg">
                                <h4 class="m-t-none"><a
                                            href="/blog/{{$news->id}}">{{str_limit($news->name,50,'...')}}</a></h4>

                                <div>
                                    {{str_limit(strip_tags($news->content), 150, '...')}}
                                </div>
                                <div class="line line-lg b-b b-light"></div>
                                <div class="text-muted">
                                    <i class="fa fa-clock-o text-muted"></i> {{$news->created_at->diffForHumans()}}
                                </div>
                            </div>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </section>


    <div class="container-fluid three-steps bg-info">
        <div class="container">
            <div class="container">
                <div class="row text-center wrapper-lg">

                    <div class="col-sm-6 text-white big-white-txt">
                        <h4 class="m-b">Запись на прием в три шага</h4>
                    </div>
                    <div class="col-sm-6 btn-zapis">
                        <a href="" class="btn btn-lg btn-default">Записаться на прием</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container reviews padder-v text-center">
        <h2 class="header-h padder-v ">О нас говорят</h2>

        <div class="row">

            @foreach($getReviews as $review)
                <div class="col-md-3">
                    <div class="blog-post">
                        <div class="panel">
                            <div class="wrapper-lg">
                                <h4 class="m-t-none"><a href="">{{$review->fio}}</a></h4>

                                <div>
                                    {{strip_tags($review->content)}}
                                </div>
                                <div class="line line-lg b-b b-light"></div>
                                <div class="text-muted">
                                    <i class="fa fa-clock-o text-muted"></i> {{$review->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection
