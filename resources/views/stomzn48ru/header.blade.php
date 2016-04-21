<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>

    <link href="/stomzn48.ru/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>@yield('title') - Стоматология «Здоровье нации»</title>
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


    <meta name="csrf-token" content="{{ csrf_token() }}" >



    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/responsive.css">
   <link rel="stylesheet" type="text/css" href="/stomzn48.ru/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/stm-icomoon.css">
   <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery-ui.slider.min.css">
     <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/style.css">
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
                             <img src="/stomzn48.ru/img/logo_blue.png" alt="Стоматология «Здоровье нации»"></a>
                         <div id="menu_toggle">
                             <button></button>
                         </div>
                     </div>
                 </div>

                 <!--Меню-->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <ul id="menu-primary-menu" class="top_nav_menu">
                        {!!Menu::getLI('10','topmain')!!}
                    </ul>
                </div>
                <!--Меню-->

            </div>
        </div>

        <!--Мобильное меню-->
        <div class="mobile_menu">
            <ul id="menu-primary-menu-1" class="top_mobile_menu">
                {!!Menu::getLI('10','topmain')!!}

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
                            <span>г. Липецк, ул. Октябрьская 61</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="top_info_box">
                        <div class="icon">
                            <i class="stm-icon-clock"></i>
                        </div>
                        <div class="text">
                            <strong>График работы</strong>
                            <span>Пн - Пт: 8:00 - 21:00, Сб: 8:00 - 14:00</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">
                    <div class="top_info_box linked">
                        <div class="icon">
                            <i class="stm-icon-calculator"></i>
                        </div>
                        <div class="text">
                            <strong>Заказать звонок</strong>
                            <span>Мы ответим на Ваши вопросы</span>
                        </div>
                        <a href="/feedback" class="link"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Блоки с контактами и временим работы-->
    

</header>



@yield('content')
@include('stomzn48ru/footer')
