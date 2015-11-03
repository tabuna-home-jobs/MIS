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
                <div class="row">
                    @foreach($Goods as $item)
                        <div class="col-md-4 item-row">
                            <div>
                                <div><img src="{{$item['avatar']}}" alt=""></div>
                                <h3><a href="/blog/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                <p class="day">{{$item['created_at']}}</p>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><a href="/service/{{$item['id']}}">Читать полностью <img src="/cozn48.ru/img/minibutton.png"></a><br></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
            resized(height);
        });

        $(document).ready(function(){
            var height = 0;
            resized(height);
        });

    </script>

@endsection