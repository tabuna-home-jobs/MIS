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
                                <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#."><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
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






                </aside>
            </div>
        </div>



        <div class="clr"></div>
    </div><!--end sub-page-content-->


@endsection
