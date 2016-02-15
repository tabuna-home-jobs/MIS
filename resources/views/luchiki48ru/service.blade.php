@extends('luchiki48ru/header')

@section('content')
    <style>
        .page-content {
            padding-bottom: 10px;
        }
        .page-content h1 {
            margin:25px 0;
        }
        .item-row {
            margin:10px 0;
        }
    </style>
    <div class="page-content">
        <div class="container">
            <h1>Услуги</h1>
            <div class="page-text">

                <div class="btn-group" role="group" aria-label="...">
                    @foreach($Category as $value)


                        <a href="/service?category={{$value['id']}}" type="button" class="btn btn-default">{{$value['name']}}</a>

                    @endforeach


                </div>

                <div class="row">
                    @foreach($Goods as $item)
                        <div class="col-md-4 item-row">
                            <div>
                                <div><img src="{{$item['avatar']}}" alt=""></div>
                                <h3><a href="/service/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                <p class="day"></p>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><a href="/service/{{$item['id']}}" class="btn btn-primary btn-default"><span class="glyphicon glyphicon-eye-open"></span> Посмотреть</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $Goods->render() !!}
            </div>
        </div>

    </div>
    <script>
        var resized = function () {

            $('.item-row').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.item-row').height(height);
        };



        $(window).on('load',function(){
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.item-row').height(height);
        });

        $(window).on('resize',function(){

            $('.item-row').css('height','auto');
            var height = 0;
            $('.item-row').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.item-row').height(height);
        });

    </script>

@endsection