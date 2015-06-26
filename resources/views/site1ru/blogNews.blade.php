@extends('site1ru/header')

@section('content')


    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-wrapper clearfix">
                    <h2 class="bordered light">{{$New['name']}}</h2>

                    <article class="blog-item blog-full-width blog-detail">
                        <div class="blog-thumbnail">
                            <img src="{{$New['avatar']}}">
                        </div>

                        <div class="blog-content">
                            {!! $New['content'] !!}
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
                        <p class="blog-meta pull-left">Теги: {{$New['tag']}}</p>
                        <p class="blog-meta pull-right">{{$New['created_at']}}</p>

                    </article>

                </div>
                <aside class="col-md-4">
                    <div class="sidebar-widget">
                        <div class="search clearfix">
                            <form method="get" action="#.">
                                <input type="text" placeholder="Поиск...">
                                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
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



        <div class="clr"></div>
    </div><!--end sub-page-content-->


@endsection
