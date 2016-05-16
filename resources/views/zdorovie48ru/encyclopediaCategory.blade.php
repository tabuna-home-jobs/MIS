@extends('newzdorovie48ru/header')


@section('title', $Category->title)
@section('description', $Category->descript)
@section('keywords', $Category->tag)







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



                    @if($Category->subCategory()->first())
                        <div class="sidebar-widget clearfix">
                            <h2 class="bordered light">Подкатегории</h2>
                            <ul class="tags">
                        @foreach($Category->subCategory()->get() as $subCategory)
                                    <li><a href="/medencyclopedia/{{$subCategory->id}}">{{$subCategory->name}}</a></li>
                        @endforeach
                            </ul>
                        </div>
                    @endif











                    <div class="procedures">
                        <h3>Разделы</h3>
                        <div class="panel-group sidebar-nav" id="accordion3">


                            @foreach($MainElementMenu as $mainElement)



                                @if($mainElement->subCategory()->count()  > 2)


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

                                @else

                                    <div class="panel panel-sidebar">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                @foreach($mainElement->subCategory()->get() as $subMenu)
                                                    <a href="/medencyclopedia/{{$subMenu->id}}"><i
                                                                class="fa fa-angle-right"></i> {{$subMenu->name}}</a>
                                                @endforeach
                                            </h4>
                                        </div>
                                    </div>
                                @endif

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
                    <h2 class="light bordered">{{$Category->name}}</h2>

                    <div class="height20"></div>
                    <div>
                        {!! $Category->text !!}
                    </div>


                    @if($Post->first())
                        <h2 class="light bordered">Новые материалы данной категории:</h2>
                        <div class="height20"></div>

                        @foreach($Post as $post)

                            <section class="col-md-12 ">
                                <article class="blog-item">
                                    <div class="blog-thumbnail">
                                        <img src="{{$post->avatar}}" alt="">
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
                    @endif

                    <div class="row text-center">
                        {!! $Post->render() !!}
                    </div>

                </div>
            </div>
        </div>

        <div class="clr"></div>
    </div><!--end sub-page-content-->






@endsection
