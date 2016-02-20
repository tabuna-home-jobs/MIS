@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>Услуги</h1>
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
                                <div class="row">
                                    @foreach($data as $item)

                                        <div class="col-xs-12">
                                            <h2>{{$item->name}}</h2>
                                            @foreach($item->goods as $key => $good)

                                                <div class="col-md-4 item-row item-serv">
                                                    <div>
                                                        <div>
                                                            <img src="{{$good->avatar}}" alt="{{$good->name}}"></div>
                                                        <h4>
                                                            <a href="/service/{{$good->id}}">
                                                                {{str_limit((strip_tags($good->name)), 80, '...')}}
                                                            </a>
                                                        </h4>
                                                        <p class="day"></p>
                                                        <div>
                                                            {{str_limit((strip_tags($good->content)), 130, '...')}}
                                                        </div>
                                                        <div class="seeall">
                                                            <a href="/service/{{$good->id}}" class="btn btn-primary btn-default">
                                                                <span class="glyphicon glyphicon-eye-open"></span> Посмотреть
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(($key+1) % 3 == 0)
                                                    <div class="clearfix"></div>
                                                @endif

                                            @endforeach
                                        </div>


                                    @endforeach
                                </div>
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
