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
        <div class="container service-list">
            <div class="center"> <h1>Услуги</h1></div>
            <div class="page-text">
               <div class="row">
                   @foreach($data as $item)

                       <div class="col-xs-12">
                           <h2>{{$item->name}}</h2>
                           @foreach($item->goods as $key => $good)

                               <div class="col-md-4 item-row item-serv">
                                   <div>
                                       <div>
                                           <img src="{{$good->avatar}}" alt="{{$good->name}}">
                                       </div>
                                       <a href="/service/{{$good->id}}">
                                           <h4>
                                               {{str_limit((strip_tags($good->name)), 80, '...')}}
                                           </h4>
                                       </a>
                                       <p class="day"></p>
                                       <div>
                                           {{str_limit((strip_tags($good->content)), 130, '...')}}
                                       </div>
                                      <!-- <div class="seeall">
                                           <a href="/service/{{$good->id}}" class="btn btn-primary btn-default">
                                               <span class="glyphicon glyphicon-eye-open"></span> Посмотреть
                                           </a>
                                       </div>-->
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
