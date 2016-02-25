@extends('sokzn48ru.app')
@section('content')

    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>
                   Новости комплекса
                </h1>
            </div>
        </div>
    </section>

    <section class="container">


        <div class="wrapper-md">
            <div class="row">
                                @foreach($News as $key=>$item)
                                    <div class="col-md-4 item-row padder-v">
                                        <div class="blog-post">
                                            <a href="/blog/{{$item->id}}"><h4 class="m-t-none">
                                                {{str_limit($item->name,50,'...')}}
                                            </h4></a>
                                            <div class="text-smal">
                                                {{$item->created_at->diffForHumans()}}
                                            </div>

                                            <a href="/blog/{{$item->id}}">
                                                <img src="{{$item->avatar}}" class="img-full">
                                            </a>

                                            <div class="padder-v">
                                                {{str_limit(strip_tags($item->content), 150, '...')}}
                                            </div>

                                        </div>

                                    </div>
                                    @if(($key+1) % 3 == 0)
                                        <div class="clearfix"></div>
                                    @endif
                                 @endforeach
                                <div class="clearfix"></div>
            </div>
        </div>



    </section>



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
