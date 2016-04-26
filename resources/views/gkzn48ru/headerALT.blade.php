<!DOCTYPE html>
<html>

<head>
    <title>Здоровье Нации - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <meta name="robots" content="noindex"/>



    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('avatar')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image:src" content="@yield('avatar')"/>





    <link rel='stylesheet' id='style_theme-css'  href='/gkzn48ru/wp-content/themes/assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='/gkzn48ru/wp-content/themes/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='/gkzn48ru/wp-content/plugins/js_composer/assets/css/js_composer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_custom_css-css'  href='/gkzn48ru/wp-content/uploads/js_composer/custom.css' type='text/css' media='screen' />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>


<body class="page page-id-207 page-template page-template-page-vc-php fixed-footer wpb-js-composer js-comp-ver-4.3.3 vc_responsive">

<main>

<header class="style_3 affix-menu affix-top">

    <!-- ===== Begin Navbar ===== -->
    <nav class="navbar navbar-default" role="navigation">

        <div class="container xsx-width">

            <!-- ===== Brand and toggle get grouped for better mobile display ===== -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="span-01"></span>
                    <span class="span-02"></span>
                    <span class="span-03"></span>
                </button>
                <a class="navbar-brand" href="/">
               <span class="logo contrast">
                        <span class="primary-logo">
                            <img id="logo" src="/gkzn48ru/wp-content/themes/assets/img/gkzn1.png" alt="">
                        </span>
                        <span class="secondary-logo">
                            <img id="logo" src="/gkzn48ru/wp-content/themes/assets/img/gkzn2.png" alt="">
                        </span>
                    </span>
                </a>
            </div>
            <!-- ===== End Brand and Toggle ===== -->

            <!-- ===== Collect the nav links, forms, and other content for toggling ===== -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="{{Active::route('appointment')}}"><a href="/appointment">Запись на приём</a></li>
                    <li class="{{Active::route('login.*')}}"><a href="/login">Личный кабинет</a></li>
                </ul>


                <ul id="menu-medic" class="nav navbar-nav navbar-right">
                    <li class="{{Active::route('medencyclopedia.*')}}"><a href="/medencyclopedia">Энциклопедия</a></li>
                    <li class="{{Active::route('blog.*')}}"><a href="/blog">Новости</a></li>
                    <li class="{{Active::route('feedback.*')}}"><a href="/feedback">Контакты</a></li>
                </ul>
            </div>
            <!-- ===== End Navbar-collapse ===== -->

        </div>

    </nav>
    <!-- ===== End Navbar ===== -->

    <!-- ===== Begin Breadcrumbs Header ===== -->
    <div class="breadCrumbs_header">
        <div class="container xsx-width">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2>@yield('headerTitle', 'Текст по умолчанию')</h2>

            </div>
        </div>
    </div>
    <!-- ===== End Breadcrumbs Header ===== -->


</header>













@if (Session::has('good'))
    <div class="container alert-container">
        <div class="alert alert-success alert-dismissable white_alerts">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="iconCheck"><i class="fa fa-check"></i></div>
            <div class="contenT"><strong>Успех! </strong>-  {{Session::get('good')}}</div>
        </div>
    </div>






@elseif(Session::has('bad'))
    <div class="container alert-container">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="iconTimes"><i class="fa fa-times"></i></div>
            <div class="contenT"><strong>Что то пошло не так! </strong>-  {{Session::get('bad')}}</div>
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



@include('gkzn48ru/footer')



