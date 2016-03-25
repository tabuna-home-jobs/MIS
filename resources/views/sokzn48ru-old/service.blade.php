@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>НАШИ УСЛУГИ</h1>
            </div>
        </div>
    </section>



    <section class="servlist">

                                    @foreach($data as $item)
                                    <div class="row {{$blue}}">
                                        <div class="container">
                                            <div class="col-md-3 serv-img serv-col">
                                                <div class="serv-desk">
                                                    <img src="{{$item['avatar']}}" alt="{{$item['name']}}">
                                                    <h2>{{$item->name}}</h2>
                                                </div>
                                            </div>
                                            <div class="col-md-9  serv-col">
                                                <div class="serv-center">
                                                @foreach($item->goods as $key => $good)

                                                    <div class="item-row item-serv">
                                                            <h3>
                                                                <a href="/service/{{$good->id}}">
                                                                    {{str_limit((strip_tags($good->name)), 80, '...')}}
                                                                </a>
                                                            </h3>
                                                    </div>
                                                    @if(($key+1) % 3 == 0)
                                                        <div class="clearfix"></div>
                                                    @endif

                                                @endforeach
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach





    </section>

    <script>
        var resized = function () {

            $('.serv-col').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.serv-col').height(height);
        };



        $(window).on('load',function(){
            var height = 0;
            $('.serv-col').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.serv-col').height(height);
        });

        $(window).on('resize',function(){

            $('.serv-col').css('height','auto');
            var height = 0;
            $('.serv-col').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.serv-col').height(height);
        });

    </script>




@endsection
