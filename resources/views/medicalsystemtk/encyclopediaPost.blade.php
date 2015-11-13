@extends('medicalsystemtk/header')


@section('title', $post->title)
@section('description', $post->descript)
@section('keywords', $post->tag)
@section('avatar', $post->avatar)






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
                                            <a data-toggle="collapse" data-parent="#accordion3"
                                               href="#collapse{{$mainElement->id}}">
                                                <i class="fa fa-angle-right"></i> {{$mainElement->name}}
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse{{$mainElement->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">


                                            @foreach($mainElement->subCategory()->get() as $subMenu)

                                                <a href="/medencyclopedia/{{$subMenu->id}}"><i
                                                            class="fa fa-angle-right"></i> {{$subMenu->name}}</a>
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




                </div>
                <div class="col-md-8">
                    <h2 class="light bordered">{{$post->name}}</h2>

                    <div class="height20"></div>
                    <div>


                        <div class="blog-thumbnail">
                            <img src="{{ $post->avatar }}" alt="{{$post->name}}">
                        </div>




                        <div data-example-id="togglable-tabs" class="bs-example bs-example-tabs">
                            <ul role="tablist" class="nav nav-tabs" id="myTabs">
                                <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="opisanie-tab" href="#opisanie">Описание</a></li>
                                <li role="presentation" class=""><a aria-controls="history" data-toggle="tab" id="history-tab" role="tab" href="#history" aria-expanded="false">История</a></li>
                                <li role="presentation" class=""><a aria-controls="lechenie" data-toggle="tab" id="lechenie-tab" role="tab" href="#lechenie" aria-expanded="false">Лечение</a></li>
                                <li role="presentation" class=""><a aria-controls="diagnostica" data-toggle="tab" id="diagnostica-tab" role="tab" href="#diagnostica" aria-expanded="false">Диагностика</a></li>
                            </ul>
                            <div class="tab-content">
                                <div aria-labelledby="opisanie-tab" id="opisanie" class="tab-pane fade active in" role="tabpanel">
                                    {!! $post->opisanie !!}
                                </div>
                                <div aria-labelledby="history-tab" id="history" class="tab-pane fade" role="tabpanel">
                                   {!! $post->history !!}
                                </div>

                                <div aria-labelledby="lechenie-tab" id="lechenie" class="tab-pane fade" role="tabpanel">
                                   {!! $post->lechenie !!}
                                </div>

                                <div aria-labelledby="diagnostica-tab" id="diagnostica" class="tab-pane fade" role="tabpanel">
                                   {!! $post->diagnostica !!}
                                </div>

                            </div>
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
                        <p class="blog-meta pull-left">Теги: {{$post->tag}}</p>
                        <p class="blog-meta pull-right">{{$post->created_at}}</p>




                    </div>

                </div>









            </div>
        </div>

        <div class="clr"></div>
    </div><!--end sub-page-content-->






@endsection
