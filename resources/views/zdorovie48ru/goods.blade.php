@extends('zdorovie48ru/header')


@section('title', $Good['title'])
@section('description', $Good['descript'])
@section('keywords', $Good['tag'])
@section('avatar', $Good['avatar'])



@section('content')
    <!--<section class="sub-page-banner text-center hidden-xs">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">{{$Category->name}}</h1>
            <p>Описание услуг оказываемых центром "Здоровье Нации"</p>
        </div>
    </section>-->





    <div class="sub-page-content">

        <div class="container">
            <div class="row">

                <aside class="col-md-4">

                    <div class="sidebar-widget clearfix">

                        <!--<h2 class="bordered light">Категории</h2>-->
                        <div class="procedures">
                            <h3>{{$Category->name}}</h3>


                            <div class="side-bar-catalog">

                                <ul class="menu-catalog">
                                @foreach($Goods->toTree() as $category)
                                        @include('zdorovie48ru.category.category', $category)
                                @endforeach
                                </ul>

                                <script>
                                    $('.menu-catalog .fa-plus-square').click(function(){
                                        $(this).toggleClass('fa-minus-square');
                                        $(this).next().next().toggleClass('active');
                                    });
                                </script>
                            </div>
                        </div>

                    </div>



                    <div class="sidebar-widget light">
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


                </aside>

                <div class="col-md-8">
                    <h2 class="bordered light">{{$Good->name}}</h2>






                    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/service?category={{$Good->category()->first()->id}}">{{$Good->category()->first()->name}}</a></li>
                        {{--dd($Good->getParent()->first()->id)--}}
                        @if(!is_null($Good->getParent()->first()))
                            @include('zdorovie48ru.category.break',$Good)
                        @endif


                        <li class="active">{{$Good->name}}</li>
                    </ol>

                    <div class="row">
                        <div class="col-md-6 col-sm-6"><img class="img-rounded" alt="" src="{{$Good->avatar}}"></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-single-content">
                                <h4>{{$Good->name}}</h4>
                                <h6>
                                    <small>Категория: {{$Good->category()->first()->name}}</small>
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="height30"></div>

                    @if($Good->attribute != "a:0:{}")

                    <h2 class="light bordered">Что <span>входит</span></h2>

                    <div>

                        <ul class="list-group">

                            @foreach( unserialize($Good->attribute) as  $keyAttr=> $valueAttr )

                                @if($keyAttr % 2 == 0)
                                    <li class="list-group-item"><span class="pull-left">{{$valueAttr}}
                                            @else
                                        </span>:<span class="pull-right">{{ $valueAttr }}</span></li>
                                @endif

                            @endforeach
                        </ul>

                    </div>
                    @endif


                    <h2 class="light bordered">Описание</h2>

                    <div>
                        {!! $Good->text!!}
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
                                   target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
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
                            <input type="hidden" name="goods" value="{{$Good->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default btn-rounded">Добавить отзыв</button>
                        </form>
                    </div>

                    <div class="clearfix"></div>





                </div>
            </div>
        </div>




        </div>

@endsection
