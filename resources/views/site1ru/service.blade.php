@extends('site1ru/header')

@section('content')

    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="bordered light">Предоставляемые <span>Услуги</span></h2>
                    <div class="products">


                        @foreach($Goods as $good)

                        <div class="product">
                            <div class="product-thumb">
                                <a href="/service/{{$good['id']}}"><img alt="" src="{{$good['avatar']}}" height="100px"></a>
                            </div>
                            <h4>{{$good['name']}}</h4>

                            <p>Тут должна быть категория</p>
                            <div class="price-rating">
                                <p class="price"><i class="fa fa-rub"></i> {{$good['price']}}</p>
                                <div class="clearfix"></div>
                            </div>
                            <span class="sperator"></span>
                            <a class="ad-to-cart" href="/service/{{$good['id']}}"><i class="fa fa-hospital-o"></i>Подробнее</a>
                        </div>

                        @endforeach

                    </div>

                    <div class="clearfix"></div>
                    {!! $Goods->render(); !!}
                </div>
                <aside class="col-md-4">
                    <div class="sidebar-widget">
                        <div class="search clearfix">
                            <form action="#." method="get">
                                <input type="text" placeholder="Поиск...">
                                <button class="search-icon" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>


                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Категории</h2>
                        <ul class="tags">
                            @foreach($Category as $value)

                                <li><a href="/service?category={{$value['id']}}">{{$value['name']}}</a></li>

                            @endforeach

                        </ul>
                    </div>


                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">всего пара <span>вопросов</span></h2>
                        <div class="poll">
                            <form>
                                <div class="radio"><span class="checked"><input type="radio"></span></div>
                                <span>Качество</span>
                                <div class="clearfix"></div>
                                <div class="radio"><span class="checked"><input type="radio"></span></div>
                                <span>Цена</span>
                                <div class="clearfix"></div>
                                <div class="radio"><span class="checked"><input type="radio"></span></div>
                                <span>Удобство</span>
                                <div class="clearfix"></div>
                                <div class="radio"><span class="checked"><input type="radio"></span></div>
                                <span>Профессианализм</span>
                                <div class="clearfix"></div>
                                <input type="submit" value="Голосовать" class="btn btn-default btn-rounded">
                            </form>
                        </div>
                    </div>



                </aside>
            </div>
        </div>
    </div>



@endsection