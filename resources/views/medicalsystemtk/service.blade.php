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
    </div>



@endsection