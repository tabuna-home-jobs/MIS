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
                <div class="col-sm-9">
                    <div class="blog-post">
                        <div class="panel">
                            <div class="wrapper-lg">
                    @foreach($News as $key=>$item)
                                    <div class="col-md-4 item-row">
                                        <div class="blog-post">
                                            <div class="panel">
                                                <a href="/blog/{{$item->id}}"> <img src="{{$item->avatar}}" class="img-full"></a>

                                                <div class="wrapper-lg">
                                                    <h4 class="m-t-none"><a
                                                                href="/blog/{{$item->id}}">{{str_limit($item->name,50,'...')}}</a></h4>

                                                    <div>
                                                        {{str_limit(strip_tags($item->content), 150, '...')}}
                                                    </div>
                                                    <div class="line line-lg b-b b-light"></div>
                                                    <div class="text-muted">
                                                        <i class="fa fa-clock-o text-muted"></i> {{$item->created_at->diffForHumans()}}
                                                    </div>
                                                </div>
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
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 class="font-bold">Последние новости</h5>
                    <div>
                        @foreach($LastNews as $new)
                            <div>
                                <a class="pull-left thumb thumb-wrapper m-r" href="/blog/{{$new->id}}">
                                    <img src="{{$new->avatar}}">
                                </a>
                                <div class="clear">
                                    <a href="/blog/{{$new->id}}" class="font-semibold text-ellipsis">{{$new->name}}</a>
                                    <p><small>{{str_limit(strip_tags($new->content), 50, '...')}}</small></p>
                                    <div class="text-xs block m-t-xs">

                                        {{$new->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                        @endforeach

                    </div>
                </div>
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
