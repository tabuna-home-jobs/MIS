@extends('luchiki48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">НАШИ АКЦИИ</h1>
            <div class="page-text padding-top-35">
                <div class="row newsList">
                    @foreach($Shares as $item)
                        <div class="col-md-4 item-row ">
                            <div class="item-blog">
                                <a href="/shares/{{$item->id}}">
                                    <img src="{{$item->avatar}}" class="img-full">
                                </a>
                                <div>
                                    <h3><a href="/shares/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                    <p class="day">{{$item['created_at']}}</p>
                                    <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            {!! $Shares->render() !!}
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
