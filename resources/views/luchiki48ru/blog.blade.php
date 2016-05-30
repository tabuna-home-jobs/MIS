@extends('luchiki48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">Новости</h1>
            <div class="page-text padding-top-35">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li>Новости</li>
                </ul>
                <div class="row newsList">
                    @foreach($News as $item)
                        <div class="col-md-4 item-row ">
                            <div class="item-blog">
                                <a href="/blog/{{$item->id}}">
                                    <img src="{{$item->avatar}}" class="img-full" alt="{{$item['name']}}">
                                </a>
                                <div>
                                    <h3><a href="/blog/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                    <p class="day">{{$item['created_at']}}</p>
                                    <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                    <!--<div class="seeall"><img src="/cozn48.ru/img/minibutton.png"><a href="/blog/{{$item['id']}}">Читать полностью</a><br></div>-->
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            {!! $News->render() !!}
        </div>

    </div>
    <script>
        var resized = function (height) {

            $('.item-row').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.item-row').height(height);
        };

        $(window).resize(function(){
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                //height_this > height ? height = height_this:'';
                if(height_this > height){
                    height = height_this;
                }
            });

            $('.item-row').height(height);
        });

        window.onload=function(){
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                //height_this > height ? height = height_this:'';
                if(height_this > height){
                    height = height_this;
                }
            });

            $('.item-row').height(height);
        }

    </script>
@endsection
