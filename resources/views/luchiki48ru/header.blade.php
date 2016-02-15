<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex"/>
    <title></title>
    <link rel="stylesheet" href="/luchiki48.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/slick.css">
    <link rel="stylesheet" href="/luchiki48.ru/style.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/font-awesome.min.css">
    <script src="/luchiki48.ru/js/jquery.min.js"></script>
    <script src="/luchiki48.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/luchiki48.ru/js/slick.min.js"></script>
    <link rel="stylesheet" href="/luchiki48.ru/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/luchiki48.ru/js/fancybox/jquery.fancybox.pack.js"></script>
</head>
<body>
<!-- HEADER -->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="phone-header col-md-2 col-xs-4">
                <img src="/luchiki48.ru/img/phone.png">
                +7 (4742) 77 03 97
            </div>
            <div class="adr-header col-md-3 col-xs-5">
                <img src="/luchiki48.ru/img/adr.png">
                г. Липецк, ул. Неделина, 15-а
            </div>
            <div class="mail-header col-md-2 col-xs-3">
                <img src="/luchiki48.ru/img/mail.png">
                info@luchiki.ru
            </div>
            <div class="eye-header col-md-4 col-xs-8">
                <img src="/luchiki48.ru/img/eye.png">
                <a href="">Обычная версия сайта</a> | Цвет:  <a href="">A</a> <a href="">A</a><a href="">A</a>   Шрифт: <a href="">М</a>
                <a>С</a> <a>Б</a>   Картинки: <input type="checkbox">
            </div>
            <div class="social-header col-md-1 col-xs-4">
                <img src="/luchiki48.ru/img/social.png">
            </div>
        </div>
    </div>
    <div class="header-top-menu container">
        <div class="logo col-md-2 col-sm-2 col-xs-2"><a href="/"><img src="/luchiki48.ru/img/logo.png"></a></div>
        <div class="menu-block col-md-10 col-sm-10 col-xs-10">
            <!-- ВЕРХНЕЕ МЕНЮ -->
            <div class="menu-header col-md-12 col-sm-12 col-xs-12">
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
                                {!! Menu::getLi(7,'topmain','') !!}
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <!-- КОНЕЦ ВЕРХНЕГО МЕНЮ -->
            <!-- НИЖНЕЕ МЕНЮ -->
            <div class="under-menu col-md-12 col-sm-12 col-xs-12">
                <ul>
                    {!! Menu::getLi(7,'topdop','') !!}
                </ul>
            </div>
            <!-- КОНЕЦ НИЖНЕГО МЕНЮ -->
        </div>
    </div>
</div>
<!-- END HEADER -->
@yield('content')
@include('luchiki48ru/footer')