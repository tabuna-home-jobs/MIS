<!DOCTYPE html>
<html>

<head>
    <title>Здоровье Нации</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    <!--theme colour-->
    <link rel="stylesheet" id="color" href="/site1.ru/css/blue.css">

    <!-- Bootstrap -->
    <link href="/site1.ru/css/bootstrap.css" rel="stylesheet">

    <!-- medicom style -->
    <link href="/site1.ru/css/medicom.css" rel="stylesheet">

    <!-- masonary -->
    <link href="/site1.ru/css/style-masonary.css" rel="stylesheet">


    <!--Madonary CSS-->
    <link rel="stylesheet" href="/site1.ru/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/site1.ru/css/prettyPhoto.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div id="wrapper">


    <header class="medicom-header">
        <div class="colourfull-row"></div>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/site1.ru/images/logo.png" alt="image" title="Medicom Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="/appointment">Запись</a></li>

                        <li class="active"><a href="#">Личный кабинет</a></li>
                        <li><a href="/service">Услуги</a></li>
                        <li><a href="/gallery">Галерея</a></li>
                        <li><a href="/reviews">Отзывы</a></li>
                        <li><a href="/team">Специалисты</a></li>
                        <li><a href="/feedback">Контакты</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

        </div>
        <div class="header-bottom-line"></div>
    </header>


    @if (Session::has('good'))
        <div class="container">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Успех!</h4>
                {{Session::get('good')}}
            </div>
        </div>
    @elseif(Session::has('bad'))
        <div class="container">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-ban"></i> Что то пошло не так!</h4>
                {{Session::get('bad')}}
            </div>
        </div>
    @endif
</div>


@if (count($errors) > 0)
    <div class="container">
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



    @include('site1ru/footer')