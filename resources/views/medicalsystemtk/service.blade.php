@extends('medicalsystemtk/header')

@section('content')
    <section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">Наши услуги</h1>
            <p>Описание услуг оказываемых центром "Здоровье Нации"</p>
        </div>
    </section>

    <div class="sub-page-content">

        <div class="container">
            <div class="row">

                <aside class="col-md-4">

                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Категории</h2>
                        <ul class="main-category">
                            @foreach($Goods->toTree() as $category)
                                @include('medicalsystemtk.category.category', $category)
                            @endforeach

                        </ul>
                    </div>


                    <div class="procedures">
                        <h3>Разделы</h3>
                        <div class="panel-group sidebar-nav" id="accordion3">

                            <div class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse12">
                                            <i class="fa fa-angle-right"></i> Заболевания органов дыхания
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse12" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="/medencyclopedia/30"><i class="fa fa-angle-right"></i> Заболевания органов дыхания</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse7">
                                            <i class="fa fa-angle-right"></i> Акушерство и гинекология
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="/medencyclopedia/13"><i class="fa fa-angle-right"></i> Акушерство и гинекология</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse11">
                                            <i class="fa fa-angle-right"></i> Аллергические заболевания
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse11" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a href="/medencyclopedia/29"><i class="fa fa-angle-right"></i> Аллергические заболевания</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <style>
                        .main-category {
                            list-style-type: none;
                        }
                        .main-category li{
                            cursor: pointer;
                        }
                        .main-category li a{
                            cursor: pointer;
                            font-size: 20px;
                        }
                        .main-category .children-ul {
                            display: none;
                            list-style: none;
                        }
                        .main-category li:hover >.children-ul{
                            display: block;
                            cursor: pointer;
                        }

                    </style>









                </aside>

                <div class="col-md-8">
                    <h2 class="bordered light">
                        @foreach($thisCategory as $item)
                            {{$item['name']}}
                        @endforeach
                    </h2>
                    <div class="products">

                        <div class="category-text">
                            @foreach($thisCategory as $item)
                                {!! $item['text'] !!}
                            @endforeach
                        </div>
                        <!--@foreach($Goods as $good)

                        <div class="product">
                            <div class="product-thumb">
                                <a href="/service/{{$good['id']}}"><img alt="" src="{{$good['avatar']}}" height="100px"></a>
                            </div>
                            <h4>{{$good['name']}}</h4>

                            <div class="price-rating">
                                <p class="price"><i class="fa fa-rub"></i> {{$good['price']}}</p>
                                <div class="clearfix"></div>
                            </div>
                            <span class="sperator"></span>
                            <a class="ad-to-cart" href="/service/{{$good['id']}}"><i class="fa fa-hospital-o"></i>Подробнее</a>
                        </div>

                        @endforeach-->

                    </div>

                    <!--<div class="clearfix text-center">


                    </div>-->

                </div>

            </div>
        </div>
            <div class="sidebar-widget light container">
                <h2 class="bordered light">Последние новости</h2>

                @foreach($LastNews as $lastNew)
                    <article style="overflow: hidden" class="popular-post col-xs-12">
                        <img style="width: 170px" alt="{{$lastNew->title}}" src="{{$lastNew->avatar}}">
                        <h4><a href="/blog/{{$lastNew->id}}">{{$lastNew->name}}</a></h4>

                        <p class="text-justify">{{ substr(strip_tags($lastNew->content), 0, 201) }} ...</p>

                        <p class="popular-date text-right">{{$lastNew->created_at}}</p>
                    </article>
                @endforeach
            </div>
    </div>



@endsection