@extends('cozn48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Новости центра Остеопатии</h1>
            <div class="page-text">
                <div class="row">
                    @foreach($News as $item)


                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="/blog/{{$item['id']}}"><img src="{{$item['avatar']}}" alt="{{$item['name']}}"></a>
                                <div class="caption cap-news">
                                    <h4 class="text-left">
                                        <a href="/blog/{{$item['id']}}">{{str_limit((strip_tags($item['name'])), $limit = 80, $end = '...')}}</a>
                                    </h4>
                                    <p>{{str_limit((strip_tags($item['content'])), $limit = 100, $end = '...')}}</p>
                                    <hr>
                                    <div class="text-left date_created">
                                        {{date('d-m-Y', strtotime($item['created_at']))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($i % 3 == 0)
                            <div class="clearfix"></div>
                        @endif

                        <?php $i++?>



                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="map">

        <script type="text/javascript" charset="utf-8"
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=nLG7p1-vbVZ40JWbYYtbBh9udCUS_5SM&width=100%&height=450"></script>

    </div>

    <style>
        .page-content {
            padding-bottom: 20px;
        }
        .seeall {
            text-align: left;
            margin:10px 0;
        }
    </style>
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
@endsection
