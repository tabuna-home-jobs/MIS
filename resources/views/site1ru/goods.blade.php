@extends('site1ru/header')



@section('title', $Goods->title)
@section('description', $Goods->descript)
@section('keywords', $Goods->tag)
@section('avatar', $Goods->avatar)






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



                    <div class="share-post clearfix">
                        <label>Поделиться</label>
                        <ul class="social-rounded">
                            <li><a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/share?url={{Request::url()}}" target="_blank"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><i
                                            class="fa fa-google-plus"></i></a></li>
                            <li><a href="http://vkontakte.ru/share.php?url={{Request::url()}}" target="_blank"><i
                                            class="fa fa-vk"></i></a></li>
                            <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                                   target="_blank"><i class="fa fa-circle-o"></i></a></li>
                        </ul>
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

                        {!! $Comments->render() !!}

                        <form class="row testimonials2" action="/service" method="post">
                                <input type="text" name="fio" max="255" required placeholder="Имя">
                                <input type="email" name="email" required placeholder="Email адрес">
                                <input type="integer" name="phone" required placeholder="Номер телефона">
                                <textarea rows="4" name="comment" required placeholder="Комментарий"></textarea>
                                <input type="hidden" name="goods" value="{{$Goods->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default btn-rounded">Добавить отзыв</button>
                        </form>
                    </div>

                    <div class="clearfix"></div>
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
    </div>



@endsection