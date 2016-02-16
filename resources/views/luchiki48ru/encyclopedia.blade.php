@extends('luchiki48ru/header')

@section('content')


    <section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">Энциклопедия здоровья</h1>
            <p>Описание причин, симптомов, методов диагностики и лечения большинства известных заболеваний</p>
        </div>
    </section>




    <div class="sub-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="sidebar-widget">
                        <div class="search clearfix">
                            <form method="get" action="/encypost">
                                <input type="text" name="search" placeholder="Поиск...">
                                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="procedures">
                        <h3>Разделы</h3>
                        <div class="panel-group sidebar-nav" id="accordion3">


                            @foreach($MainElementMenu as $mainElement)


                                <div class="panel panel-sidebar">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapse{{$mainElement->id}}">
                                                <i class="fa fa-angle-right"></i> {{$mainElement->name}}
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse{{$mainElement->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">


                                            @foreach($mainElement->subCategory()->get() as $subMenu)

                                                <a href="/medencyclopedia/{{$subMenu->id}}"><i class="fa fa-angle-right"></i> {{$subMenu->name}}</a>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>



                            @endforeach
                        </div>
                    </div>



                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Алфавитный указатель</h2>
                        <ul class="archives">
                            @foreach($Index as $bukva)
                                <li><a href="/encypost?index={{$bukva->name}}"><i class="fa fa-long-arrow-right"></i>{{$bukva->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>


                </div>
                <div class="col-md-8">
                    <h2 class="light bordered">Тут будут человечки</h2>
                    <div class="height20"></div>
                    <div class="big-font">
                        <div class="media pull-right"><img src="images/cancer-canter-img2.jpg" class="img-rounded" alt="" title=""></div>
                        <p>Welcome to Medicom Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore that the power..</p>
                        <img src="http://eko-zdrav.ru/ochishenie/images/308.jpg" class="img-responsive">
                        </div>




                    <h2 class="light bordered">Последние статьи</h2>
                    <div class="height20"></div>

                    @foreach($LastNews as $post)

                        <section class="col-md-4">
                            <article class="blog-item">
                                <div class="blog-thumbnail">
                                    <img src="{{$post->avatar}}" alt="{{$post->name}}">
                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title"><a href="/encypost/{{$post->id}}">{{$post->name}}</a></h4>

                                    <p>
                                        {{str_limit((strip_tags($post->opisanie)), $limit = 100, $end = '...')}}
                                    </p>
                                    <a class="btn btn-default btn-mini btn-rounded" href="/encypost/{{$post->id}}">Читать полностью</a>
                                </div>
                            </article>
                        </section>
                    @endforeach


                </div>
            </div>
        </div>

        <div class="clr"></div>
    </div><!--end sub-page-content-->






@endsection
