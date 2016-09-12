@extends('karta-uspeharu/headerPage')
@section('content')
    <style>
        .page-content {

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
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li class="active">Полезная информация</li>
            </ul>
            <h1>Полезная информация</h1>
            <div class="page-text">
                <div class="row">
                    @foreach($art as $item)
                        <div class="col-md-4 item-row">
                            <div>
                                <div><img src="{{$item['avatar']}}" alt=""></div>
                                <h3><a href="/art/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                <p class="day">{{$item['created_at']}}</p>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><a href="/art/{{$item['id']}}" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-eye-open"></span> Подробнее</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <script>
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

    </script>
    <style>
        .item-row img {
            max-width: 100%;;
        }
    </style>
@endsection