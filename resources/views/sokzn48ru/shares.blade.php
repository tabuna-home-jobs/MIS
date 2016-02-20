@extends('sokzn48ru.app')
@section('content')

    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>

                    Акции Комплекса
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
                                @foreach($Shares as $key=>$item)
                                    <div class="col-md-4 item-row">
                                        <div class="blog-post">
                                            <div class="panel">
                                                <a href="/shares/{{$item->id}}"> <img src="{{$item->avatar}}" class="img-full"></a>

                                                <div class="wrapper-lg">
                                                    <h4 class="m-t-none"><a
                                                                href="/shares/{{$item->id}}">{{str_limit($item->name,50,'...')}}</a></h4>

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
                    @if(isset($LastNews))
                        @include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
                    @endif
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
