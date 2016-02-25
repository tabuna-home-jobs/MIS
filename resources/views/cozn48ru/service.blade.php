@extends('cozn48ru/header')

@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Услуги центра Остеопатии</h1>
            <div class="page-text">

                <div class="nav-good-category-container">

                    <div class="btn-group nav-good-category" role="group" aria-label="...">
                        <a href="/service" type="button" class="btn btn-default">Все</a>
                        @foreach($Category as $item)

                            <a href="/service?category={{$item['id']}}" type="button" class="btn btn-default">{{$item['name']}}</a>

                        @endforeach
                    </div>

                </div>






                <div class="row">
                    @foreach($Goods as $item)
                        <div class="col-md-4 item-row-good">
                            <div>
                                <div class="item-row-good-img">
                                    <img src="{{$item['avatar']}}" alt="">
                                </div>
                                <h3><a href="/service/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a></h3>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall">
                                    <img src="/cozn48.ru/img/minibutton.png">
                                    <a href="/service/{{$item['id']}}">Перейти к услуге</a><br></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="map">

        <script type="text/javascript" charset="utf-8"
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=nLG7p1-vbVZ40JWbYYtbBh9udCUS_5SM&width=100%&height=450"></script>

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

        $(document).ready(function(){
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

    </script>




                    </div>


                    {!! $Goods->render() !!}




@endsection
