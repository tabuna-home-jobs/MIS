@extends('zdorovie48ru/header')

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
                    {!! $Goods->render() !!}
                </div>
                <aside class="col-md-4">

                    <div class="sidebar-widget clearfix">
                        <h2 class="bordered light">Категории</h2>
                        <ul class="tags">
                            @foreach($Category as $value)

                                <li><a href="/service?category={{$value['id']}}">{{$value['name']}}</a></li>

                            @endforeach

                        </ul>
                    </div>



                    <div class="sidebar-widget light">
                        <h2 class="bordered light">Последние новости</h2>

                        @foreach($LastNews as $lastNew)
                            <article class="popular-post">
                                <img alt="{{$lastNew->title}}" src="{{$lastNew->avatar}}">
                                <h4><a href="/blog/{{$lastNew->id}}">{{$lastNew->name}}</a></h4>

                                <p class="text-justify">{{ substr(strip_tags($lastNew->content), 0, 201) }} ...</p>

                                <p class="popular-date text-right">{{$lastNew->created_at}}</p>
                            </article>
                        @endforeach
                    </div>






                </aside>
            </div>
        </div>
    </div>



@endsection