<!DOCTYPE html>
<html>

<head>
    <title>Здоровье Нации - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>




    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('avatar')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image:src" content="@yield('avatar')"/>



    <!--theme colour-->
    <link rel="stylesheet" type="text/css" href="/karta-uspeha.ru/css/slick.css">
    <link rel="stylesheet" id="color" href="/site1.ru/css/all.css">
    <link rel="stylesheet" href="/site1.ru/fonts/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/site1.ru/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <!-- Bootstrap -->
    <!--<link href="/site1.ru/css/bootstrap.css" rel="stylesheet">-->

    <!-- medicom style -->
    <!--<link href="/site1.ru/css/medicom.css" rel="stylesheet">-->

    <!-- masonary -->
    <!--  <link href="/site1.ru/css/style-masonary.css" rel="stylesheet">-->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!--Madonary CSS-->
    <!--<link rel="stylesheet" href="/site1.ru/css/reset.css" />-->
   <!-- <link rel="stylesheet" type="text/css" href="/site1.ru/css/prettyPhoto.css" />-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/karta-uspeha.ru/js/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.highslide').fancybox({
                'fitToView' : false
            });
        });
    </script>
</head>
<body>




<!-- Фейсбук -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4&appId=1674409386111897";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- !Фейсбук -->




<div id="wrapper">


    <header class="medicom-header">
        <div class="colourfull-row"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a class="logo-main" href="/"><img src="/site1.ru/images/logo.png" alt="image" title="Здоровье Нации"></a>
                </div>
                <div class="col-md-9  col-xs-6">
                    <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <div class="row hidden-xs text-center">
                        <div class="col-lg-3">


                            <div class="cocial-top-li">
                                <a target="_blank" href="http://vk.com/zdorovie_nacii48"><i class="fa fa-vk" ></i></a>
                                <a target="_blank" href="https://www.facebook.com/groups/zdorovie48/"><i class="fa fa-facebook" ></i></a>
                                <a target="_blank" href="http://ok.ru/group/52174602436776"><i
                                            class="fa fa-odnoklassniki"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-contacts top-addres">
                                      <a href="/feedback">  <i class="fa fa-map-marker top-contacts-fa" ></i>
                                          ул.Октябрьская д.61
                                      </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-contacts">
                                        <i style="display: inline!important" class="fa fa-phone top-contacts-fa" ></i>
                                        <a href="tel:+74742227887">(4742) 227-887</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!!Menu::getZdorovieNacii('2','Верхнее меню','','menu')!!}


                </div><!-- /.navbar-collapse -->
            </nav>
                </div>
            </div>
        </div>
        <div class="header-bottom-line"></div>
    </header>


    @if (Session::has('good'))
        <div class="container alert-container">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Успех!</h4>
                {{Session::get('good')}}
            </div>
        </div>
    @elseif(Session::has('bad'))
        <div class="container alert-container">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-ban"></i> Что то пошло не так!</h4>
                {{Session::get('bad')}}
            </div>
        </div>
    @endif
</div>


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


@include('zdorovie48ru/footer')
