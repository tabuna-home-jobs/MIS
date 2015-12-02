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
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-plus-square"></i>
                <h4 class="relative-pos">
                    <a id="dropserv" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Услуги
                        <span class="caret"></span>
                    </a>
                    <ul id="menu1" class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropserv">
                        <li><a href="/service/53">Консультация</a></li>
                        <li><a href="/service/127">Диагностика</a></li>
                        <li><a href="/service/142">Лечение</a></li>

                    </ul>
                </h4>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-thumbs-o-up"></i>
                <h4><a href="/reviews">Отзывы</a></h4>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-stethoscope"></i>
                <h4><a href="/appointment">Записатсья на приём</a></h4>
            </div>
        </div>
    </div>





@endsection
