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
                <h4>Услуги</h4>

                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    popularised only five Power of centuries.<br><a href="/service">- Перейти</a></p>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-thumbs-o-up"></i>
                <h4>Отзывы</h4>

                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    popularised only five Power of centuries.<br><a href="/reviews">- Перейти</a></p>
            </div>
            <div class="tri-sec text-center">
                <i class="feature-icon fa fa-stethoscope"></i>
                <h4>Записатсья на приём</h4>

                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    popularised only five Power of centuries.<br><a href="/appointment">- Перейти</a></p>
            </div>
        </div>
    </div>





@endsection
