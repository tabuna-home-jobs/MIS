<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/karta-uspeha.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/karta-uspeha.ru/css/slick.css">
    <link rel="stylesheet" href="/karta-uspeha.ru/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/karta-uspeha.ru/style.css">
    <meta name="robots" content="noindex"/>
    <title>Ценр психологического развития личности </title>
    <script type="text/javascript" src="/karta-uspeha.ru/js/jquery.js"></script>
    <script type="text/javascript" src="/karta-uspeha.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/karta-uspeha.ru/js/slick.min.js"></script>
    <script>
        $(window).load(function(){
            $('.anim').on('mouseenter',function(){
                $(this).addClass('animated flip');
            });
            $('.anim').mouseleave(function(){
                $(this).removeClass('animated flip');
            });
        });
    </script>
</head>
<body>
<!--Хэдр начинается!-->
<div class="header container">
    <div class="row">
        <div class=" animated flipInX logo col-md-2">
            <a href="/"><img src="/karta-uspeha.ru/img/logo.png"></a>
        </div>
        <div class="name col-md-5">
            <h4>Ценр психологического развития личности ГК «Здоровье нации»</h4>
            <p>Психологические услуги для беременных и семей ожидающих ребенка, для детей, для родителей, для взрослых</p>
        </div>
        <div class="social col-md-2">
            <a href=""><img class="anim" src="/karta-uspeha.ru/img/vk.png"></a>
            <a href=""><img class="anim" src="/karta-uspeha.ru/img/tw.png"></a>
            <a href=""><img class="anim" src="/karta-uspeha.ru/img/ok.png"></a>
            <a href=""><img class="anim" src="/karta-uspeha.ru/img/fb.png"></a>
        </div>
        <div class="contacts col-md-3">
            <p>+7 (4742) 22 02 10 <br> +7 (4742) 22 12 77</p>
            <span>г. Липецк, ул. Октябрьская, д. 61</span>
            <a href="">info@kartauspeha.ru</a>
        </div>
    </div>
    <!-- Слайдер-->
    <div class="slider">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/karta-uspeha.ru/img/slider.png" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="/karta-uspeha.ru/img/slider.png" alt="...">
                        <div class="carousel-caption">
                            ...
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
        </div>
    </div>
    <!-- Слайдер кончается-->
    <!-- Меню начинается -->
    <div class="row">
        <nav class="navbar navbar-default menu1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        {!! Menu::getLi(8,'topmain','') !!}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Меню кончается -->
</div>
<!--Хэдр кончается-->
@yield('content')
@include('karta-uspeharu/footer')