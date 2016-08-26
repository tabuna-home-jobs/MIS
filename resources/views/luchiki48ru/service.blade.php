@extends('luchiki48ru/header')

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="center"> <h1>Услуги</h1></div>
            <div class="padding-top-35">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li>Услуги</li>
                </ul>
            </div>
            <div class="page-text  service-list">
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
                                       {{--
                                       <!--
                                       <p class="day"></p>
                                       <div>
                                           {{str_limit((strip_tags($good->content)), 130, '...')}}
                                       </div>
                                        <div class="seeall">
                                           <a href="/service/{{$good->id}}" class="btn btn-primary btn-default">
                                               <span class="glyphicon glyphicon-eye-open"></span> Посмотреть
                                           </a>
                                        </div>-->
                                        --}}
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
    <script src="/luchiki48.ru/js/articles_height.js"></script>

@endsection
