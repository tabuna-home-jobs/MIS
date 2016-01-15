<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
    <title>Стоматология @yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" >

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('avatar')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image:src" content="@yield('avatar')"/>

    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/tooltipster-light.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/styles-mirror.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/stm-icomoon.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui.datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui.slider.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui-timepicker-addon.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/select2.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/style.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/frontend_customizer.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/skin_2.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/skin_3.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/skin_4.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/js_composer.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/customs.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery1.11.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/spin.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/spin.jquery.js"></script>


    <script type="text/javascript" src="/stomzn48.ru/theme/js/functions.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery.form.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/scripts.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/theme/js/jquery.cookie.min.js"></script>


</head>
<script>
    /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
    if ( typeof WebFontConfig === "undefined" ) {
        WebFontConfig = new Object();
    }
    WebFontConfig['google'] = {families: ['Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic', 'Playfair+Display:400,700,900,400italic,700italic,900italic']};

    (function() {
        var wf = document.createElement( 'script' );
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName( 'script' )[0];
        s.parentNode.insertBefore( wf, s );
    })();
</script>
<body>

<header id="header">

    <div class="top_nav affix-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="/">
                            <img src="/stomzn48.ru/img/logo_blue.png" alt="Dent-All"></a>
                        <div id="menu_toggle">
                            <button></button>
                        </div>
                    </div>
                </div>

                <!--Меню-->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <ul id="menu-primary-menu" class="top_nav_menu">
                        <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4">
                            <a href="/">Главная</a>
                        </li>
                        <li id="menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-648">
                            <a href="/">О компании</a>
                            <ul class="sub-menu">
                                <li id="menu-item-730" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-730">
                                    <a href="/">Контакты</a>
                                </li>
                                <li id="menu-item-750" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750">
                                    <a href="/">О нас</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-889" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889">
                            <a href="/">Технологии</a>
                        </li>
                        <li id="menu-item-770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-770">
                            <a href="/">Оборудование</a>
                        </li>
                        <li id="menu-item-608" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-608">
                            <a href="/">Материалы</a>

                        </li>
                        <li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902">
                            <a href="/">Каталог</a>
                        </li>
                        <li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902">
                            <a href="/">Новости</a>
                        </li>
                    </ul>
                </div>
                <!--Меню-->

            </div>
        </div>

        <!--Мобильное меню-->
        <div class="mobile_menu">
            <ul id="menu-primary-menu-1" class="top_mobile_menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4">
                    <a href="/">Главная</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-648">
                    <a href="/">О компании</a>
                    <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-730">
                            <a href="/">Контакты</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750">
                            <a href="/">О нас</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889">
                    <a href="/">Технологии</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-770">
                    <a href="/">Оборудование</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-608">
                    <a href="/">Материалы</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902">
                    <a href="/">Каталог</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902">
                    <a href="/">Новости</a>
                </li>
            </ul>
        </div>
        <!--Мобильное меню-->

    </div>

    <!--Блоки с контактами и временим работы-->
    <div class="top_info_boxes">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="top_info_box">
                        <div class="icon">
                            <i class="stm-icon-roundels"></i>
                        </div>
                        <div class="text">
                            <strong>Свяжитесь с нами +7 (4742) 227-887</strong>
                            <span>г. Липецк, ул.Советская, д. 66; ул.Фрунзе, д.14</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="top_info_box">
                        <div class="icon">
                            <i class="stm-icon-clock"></i>
                        </div>
                        <div class="text">
                            <strong>Рабочий день</strong>
                            <span>Пон - Пт: 8:00 - 5:00, Сб-Вс: 9:00 - 14:00</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">
                    <div class="top_info_box linked">
                        <div class="icon">
                            <i class="stm-icon-calculator"></i>
                        </div>
                        <div class="text">
                            <strong>Запишитесь на приём</strong>
                            <span>Это просто</span>
                        </div>
                        <a href="/" class="link"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Блоки с контактами и временим работы-->

    <!--Слайдер-->
    <div class="bs-example" data-example-id="simple-carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img  src="/stomzn48.ru/img/banner1.png" alt="Альт для картинки">
                    <div class="carousel-caption">
                        Прекрасное описание для картинки
                    </div>
                    <!--Это бекграунд у картинки слайдера-->
                    <div class="wrrr"></div>
                    <!--Это бекграунд у картинки слайдера-->
                </div>

            </div>



        </div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#carousel-example-generic .item:first-child").addClass('active');
            });
        </script>
    </div>
    <!--Слайдер-->


</header>
@yield('content')
@include('stomzn48ru/footer')
