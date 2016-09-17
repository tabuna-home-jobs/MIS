<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/mother-baby.ru/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/mother-baby.ru/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/mother-baby.ru/css/slick.css" type="text/css">
    <link rel="stylesheet" href="/mother-baby.ru/style.css" type="text/css">
    <script src="/mother-baby.ru/js/jquery.min.js"></script>
    <script src="/mother-baby.ru/js/bootstrap.min.js"></script>
    <script src="/mother-baby.ru/js/slick.min.js"></script>
    <script src="/mother-baby.ru/js/app.js"></script>


    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>@yield('title') - Медицинский центр «Здоровье Нации»</title>
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

</head>
<body>

<header class="index-head">




                    <nav class="navbar navbar-top  container-fluid">
                        <div class="container">
                            <div class="row">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed text-black" data-toggle="collapse"
                                            data-target="#navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Навигация</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <a class="navbar-brand" href="/">
                                        <img src="/mother-baby.ru/img/logo.png" alt="Здоровье Нации" class="img-responsive">
                                    </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    {!!Menu::getZdorovieNacii('2','Верхнее меню','','menu')!!}


                                    <ul class="soc nav navbar-nav nav-bar-right">
                                        <li><a href="/"><img src="/mother-baby.ru/img/vk.png"></a></li>
                                        <li><a href="/"><img src="/mother-baby.ru/img/fb.png"></a></li>
                                        <li><a href="/"><img src="/mother-baby.ru/img/odnoklasniki.png"></a></li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-left">
                                        <li><a href="#">Link</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div>
                        </div><!-- /.container-fluid -->
                    </nav>







</header>










@yield('content')


@include('mother-babyru/footer')
