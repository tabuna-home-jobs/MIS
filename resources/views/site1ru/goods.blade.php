@extends('site1ru/header')

@section('content')

    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="bordered light">{{$Goods->name}}</h2>

                    <div class="row">
                        <div class="col-md-6 col-sm-6"><img class="img-rounded" alt="" src="{{$Goods->avatar}}"></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-single-content">
                                <h4>{{$Goods->name}}</h4>
                                <h6>
                                    <small>Категория: {{$Goods->category()->first()->name}}</small>
                                </h6>
                                <h6>
                                    <small>Cтоимость: {{$Goods->price}} <i class="fa fa-rub"></i></small>
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="height30"></div>

                    <h2 class="light bordered">Что <span>входит</span></h2>

                    <div>

                        <ul class="list-group">

                            @foreach( unserialize($Goods->attribute) as  $keyAttr=> $valueAttr )

                                @if($keyAttr % 2 == 0)
                                    <li class="list-group-item"><span class="pull-left">{{$valueAttr}}
                                            @else
                                        </span>:<span class="pull-right">{{ $valueAttr }}</span></li>
                                @endif

                            @endforeach
                        </ul>

                    </div>


                    <h2 class="light bordered">Описание</h2>

                    <div>
                        {!! $Goods->text!!}
                    </div>


                    <h2 class="light bordered">Отзывы</h2>


                    <div class="review" id="comments">
                        <ol class="commentlist">

                            @foreach($Comments as $comment)

                                <li class="comment">
                                    <div class="comment_container">
                                        <div class="comment-text">
                                            <p class="meta"><i class="fa fa-user"></i>
                                                <strong itemprop="author">{{$comment['fio']}}</strong>
                                                <time class="pull-right"><i class="fa fa-clock-o"></i>
                                                    {{$comment['created_at']}}</time>
                                            </p>
                                            <div class="description"><p>{{$comment->content}}</p></div>
                                        </div>
                                    </div>
                                </li>

                            @endforeach

                        </ol>

                        {!! $Comments->render(); !!}

                        <a class="btn btn-default btn-rounded" href="#.">Добавить отзыв</a>
                    </div>

                    <div class="clearfix"></div>
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
    </div>



@endsection