@extends('luchiki48ru/header')
@section('content')
    <!--Карусель на главной-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/luchiki48.ru/uploads/revslider/slider_02/img-slider-01_resize.png" alt="слайд1">
                <div class="carousel-caption">
                    Прекрасное описание для слайда
                </div>
            </div>
            <div class="item">
                <img src="/luchiki48.ru/uploads/revslider/slider_04/img-slider-04.png" alt="слайд2">
                <div class="carousel-caption">
                    Прекрасное описание для слайда 2
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Карусель на главной-->
@endsection
