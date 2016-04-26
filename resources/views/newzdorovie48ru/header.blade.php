<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <meta name="robots" content="noindex" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/zdorovie48/css/orchid.css" type="text/css">
    <script src="/zdorovie48/js/orchid.js"></script>

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



<div class="alert alert-danger text-center" role="alert">
    На данный момент времени на <strong>сайте</strong> ведутся технические работы. В самое ближайшее время они закончатся, и сайт заработает в штатном режиме.</div>



<header class="container">

    <nav class="navbar navbar-top">
        <div class="container-fluid">
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
                        <img src="/zdorovie48/img/logo.png" alt="Здоровье Нации" class="img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    {!!Menu::getZdorovieNacii('2','Верхнее меню','','menu')!!}

                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>


    <section class="container-fluid header-bottom">
        <div class="row">
            <div class="col-md-4 v-center">
                <div class="col-md-2 padder-v">
                    <i class="fa fa-home fa-3x text-success"></i>
                </div>
                <div class="col-md-10 padder-v">
                    <h6><b>Свяжитесь с нами +7 (4742) 227-887</b></h6>
                    <small>ул. Октябрьская д.61</small>
                </div>
            </div>


            <div class="col-md-4 v-center">
                <div class="col-md-2 padder-v">
                    <i class="fa fa-clock-o fa-3x text-success"></i>
                </div>
                <div class="col-md-10 padder-v">
                    <h6><b>График работы</b></h6>

                    <small>Пн - Пт: 8:00 - 21:00, Сб: 8:00 - 19:00</small>
                </div>
            </div>


            <div class="col-md-4 bg-success text-white v-center">
                <div class="col-md-2 padder-v">
                    <i class="fa fa-calendar fa-3x"></i>
                </div>
                <div class="col-md-10 padder-v">
                   <a href="/#main-appointments-section"> <h6><b>Запишитесь на приём</b></h6>
                    <small>В три простых шага</small>
                       </a>
                </div>
            </div>
        </div>
    </section>


</header>



@if (count($errors) > 0)
    <div class="container alert-container">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ошибка!</strong> Пожалуйста проверте вводимые данные.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif



@yield('content')


@include('newzdorovie48ru/footer')
