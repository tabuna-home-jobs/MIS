<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex"/>
    <title></title>
    <link rel="stylesheet" href="/luchiki48.ru/theme/css/full_styles.min.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/theme/css/woocommerce-smallscreen.css">
    <link rel="stylesheet" href="/luchiki48.ru/theme/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="/luchiki48.ru/theme/js/all.min.js"></script>
    <script src="/luchiki48.ru/theme/js/cloudflare.min.js"></script>
    <script src="/luchiki48.ru/js/bootstrap.min.js"></script>
    <script src="/luchiki48.ru/js/custom.js"></script>
</head>
<body>
    <!--Верхняя плашка с адресами-->
    <div class="site-top site-top-4 header-4">
        <div class="container">
            <div class="site-top-left">

                <div class="site-top-content">
                    <ul>
                        <li><i class="fa fa-phone-square"></i>+7 (4742) 77 03 97</li>
                    </ul>
                </div>
                <div class="site-top-content">
                    <i class="fa fa-home"></i>г. Липецк, ул. Неделина, 15-а
                </div>
                <div class="site-top-content">
                    <i class="fa fa-at"></i>info@luchiki.ru
                </div>

            </div>
            <div class="site-top-right">
                <ul class="social-link">
                    <li><a href="http://www.vk.com" target="_blank"><i class="fa fa-vk"></i></a></li>
                    <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.ok.ru" target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
                    <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Верхняя плашка с адресами-->
    <!--Шапка и меню-->
    <header class="header-4 ">
        <div class="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <div class="header_logo">
                            <a href="/" title="CUPID | Adorable Kindergarten - Just another WordPress site" rel="home">
                                <div><img src="/luchiki48.ru/img/logo_childs3.png" alt="CUPID | Adorable Kindergarten - Just another WordPress site"></div>
                            </a>
                        </div>
                    </div>
                    <div class="icon-search-menu"><i class="fa fa-search"></i></div>
                    <div class="collapse yamm navbar-collapse">
                        <!--Меню-->
                        {!!Menu::getMenuByLayout('7','topmain','','menu')!!}
                        <!--Меню-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Шапка и меню-->
@yield('content')
@include('luchiki48ru/footer')
