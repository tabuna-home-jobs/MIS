@extends('medicalsystemtk/header')


@section('title', $Page['title'])
@section('description', $Page['descript'])
@section('keywords', $Page['tag'])
@section('avatar', $Page['avatar'])



@section('content')


    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-12 blog-wrapper clearfix">
                    <h2 class="bordered light">{{$Page['name']}}</h2>

                    <article class="blog-item blog-full-width blog-detail">
                        <div class="blog-thumbnail">
                            <img src="{{$Page['avatar']}}">
                        </div>

                        <div class="blog-content">
                            {!! $Page['content'] !!}
                        </div>


                    </article>

                </div>

            </div>
        </div>


        <div class="clr"></div>
    </div><!--end sub-page-content-->





    <div class="tri-sec-bg">
        <div class="container">
            <div class="tri-sec text-center tri-sec-first">
                
                <i class="feature-icon fa fa-plus-square"></i>
                <span class="relative-pos">
                    
                        Услуги
                        <!-- <span class="caret"></span> -->
                    </span>
                
                    <ul>
                        <li><a href="/service/53">Консультация</a></li>
                        <li><a href="/service/127">Диагностика</a></li>
                        <li><a href="/service/142">Лечение</a></li>

                    </ul>
                
            </div>
            <div class="tri-sec text-center">
            <a href="/reviews">
                <i class="feature-icon fa fa-thumbs-o-up"></i>
                <span>Отзывы</span>
            </a>
            </div>
            <div class="tri-sec text-center">
                <a href="/appointment">
                <i class="feature-icon fa fa-stethoscope"></i>
                <span>Записатсья на приём</span>
                </a>
            </div>
        </div>
    </div>





@endsection
