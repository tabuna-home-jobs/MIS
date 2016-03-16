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





    <link rel='stylesheet' id='style_theme-css'  href='/gkzn48ru/wp-content/themes/medic-final/assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='/gkzn48ru/wp-content/themes/medic-final/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='/gkzn48ru/wp-content/plugins/js_composer/assets/css/js_composer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_custom_css-css'  href='/gkzn48ru/wp-content/uploads/js_composer/custom.css' type='text/css' media='screen' />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>








<body class="page page-id-207 page-template page-template-page-vc-php fixed-footer wpb-js-composer js-comp-ver-4.3.3 vc_responsive">

<main>

    <!-- ================================ -->
    <!-- ========== Begin Header ========== -->
    <!-- ================================ -->
    <header class="style_3 affix-menu" style="background: url(/gkzn48ru/images/doctor-main-bg-min.jpg) 50% 0 no-repeat;">

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
                                                            <img id="logo" src="/gkzn48ru/wp-content/themes/medic-final/assets/img/logo_1.png" alt="">
                                                    </span>
                        <span class="secondary-logo">
                            <img id="logo" src="/gkzn48ru/wp-content/themes/medic-final/assets/img/logo.png" alt="">
                        </span>
                    </span>
                    </a>
                </div>
                <!-- ===== End Brand and Toggle ===== -->

                <!-- ===== Collect the nav links, forms, and other content for toggling ===== -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">

                    <ul id="menu-medic" class="nav navbar-nav navbar-right">






                        <li class="{{Active::route('appointment')}}"><a href="/appointment">Запись на приём</a></li>
                        <li class="{{Active::route('login.*')}}"><a href="/login">Личный кабинет</a></li>
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
        <!-- ===== End Breadcrumbs Header ===== -->

        <div class="container xsx-width">
            <div class="row">
                <div class="departaments-owl">
                    <ul class="clearfix">
                        <li>
                            <div class="departament-item-owl">
                                <a href="http://zdorovie48.ru" target="_blank" class="no-u">
                                    <img src="/gkzn48ru/images/logo/zdorovie_w.png">
                                </a>
                                <h3><a href="http://zdorovie48.ru" target="_blank">Здоровье нации</a></h3>

                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию.</p></div>
                            <div class="departament-item-owl">

                                <a href="http://karta-uspeha.ru" target="_blank" class="no-u">
                                    <img src="/gkzn48ru/images/logo/karta_w.png">
                                </a>
                                <h3><a href="http://karta-uspeha.ru" target="_blank">Карта Успеха</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию. </p></div>
                        </li>
                        <li>
                            <div class="departament-item-owl">
                                <a href="http://mother-baby.ru/"  target="_blank" class="no-u">
                                    <img src="/gkzn48ru/images/logo/kid_w.png">
                                </a>
                                <h3><a href="http://mother-baby.ru/"  target="_blank">Мать и Дитя</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию. </p></div>

                            <div class="departament-item-owl">
                                <img src="/gkzn48ru/images/logo/luch_w.png">
                                <h3><a href="#">Лучики</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию. </p></div>


                        </li>
                        <li>
                            <div class="departament-item-owl">

                                <img src="/gkzn48ru/images/logo/osteo_w.png">
                                <h3><a href="#">Центр Остеопатии</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию.</p></div>

                            <div class="departament-item-owl">
                                <img src="/gkzn48ru/images/logo/sok_w.png">
                                <h3><a href="#">СОК</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию.</p></div>
                        </li>
                        <li>
                            <div class="departament-item-owl">
                                <img src="/gkzn48ru/images/logo/diagnos.png">
                                <h3><a href="#">Центр Диагностики</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию.</p>
                            </div>

                            <div class="departament-item-owl">
                                <img src="/gkzn48ru/images/logo/zub.png">
                                <h3><a href="#">Стомотология</a></h3>
                                <p>Разнообразный и богатый опыт начало повседневной работы по формированию.</p>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- ================================ -->
    <!-- ========== End Header ========== -->
    <!-- ================================ -->







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



    @include('gkzn48ru/footer')
