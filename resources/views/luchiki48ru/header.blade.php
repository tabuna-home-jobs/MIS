<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/luchiki48.ru/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>@yield('title') - СТУДИЯ РАННЕГО РАЗВИТИЯ ДЕТЕЙ «ЛУЧИКИ»</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="@yield('avatar')">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('description')"/>
        <meta name="twitter:image:src" content="@yield('avatar')"/>
    @else
        {!! $meta !!}
    @endif
    <link rel="stylesheet" href="/luchiki48.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/slick.css">
    <link rel="stylesheet" href="/luchiki48.ru/style.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/font-awesome.min.css">
    <script src="/luchiki48.ru/js/jquery.min.js"></script>
    <script src="/luchiki48.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/luchiki48.ru/js/slick.min.js"></script>
    <link rel="stylesheet" href="/luchiki48.ru/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/luchiki48.ru/js/fancybox/jquery.fancybox.pack.js"></script>


    <script>
        $(document).ready(function(){
            $('.highslide').fancybox();
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65069943-25', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<!-- HEADER -->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="phone-header col-md-2 col-sm-6  col-xs-12">
                <img src="/luchiki48.ru/img/phone.png">
                +7 (4742) 77 03 97
            </div>
            <div class="adr-header col-md-3 col-sm-6 col-xs-12">
                <img src="/luchiki48.ru/img/adr.png">
                г. Липецк, ул. Неделина, 15-а
            </div>
            <div class="mail-header col-md-2 col-sm-6 col-xs-12">
                <img src="/luchiki48.ru/img/mail.png">
                info@luchiki.ru
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <form class="navbar-form navbar-form-sm nav-search"  role="search" action="/search" method="post">
                    {!! csrf_field() !!}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Поиск по ..." required>
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                    </div>
                </form>

            </div>

            <div class="social-header col-md-2 hidden-sm hidden-xs">
                <!--<img src="/luchiki48.ru/img/social.png">-->
                <div class="col-sm-3 col-md-3 col-xs-3">
                    <a href="http://vk.com/club58100338"><img src="/luchiki48.ru/img/vk.png"></a>
                </div>
                <!--<div class="col-sm-3 col-md-3 col-xs-3">
                    <a href=""><img src="/luchiki48.ru/img/twit.png"></a>
                </div>-->
                <div class="col-sm-3 col-md-3 col-xs-3">
                    <a href="https://www.ok.ru/luchikistu"><img src="/luchiki48.ru/img/ok.png"></a>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3">
                    <a href="https://www.facebook.com/groups/676658982456131/ "><img src="/luchiki48.ru/img/face.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top-menu container">
        <div class="logo col-md-2 col-sm-2 col-xs-12"><a href="/"><img src="/luchiki48.ru/img/logo.png"></a></div>
        <div class="menu-block col-md-10 col-sm-10 col-xs-12">
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
