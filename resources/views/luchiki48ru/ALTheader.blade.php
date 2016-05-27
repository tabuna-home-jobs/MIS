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

    <link rel="stylesheet" href="/luchiki48.ru/theme/css/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/luchiki48.ru/theme/css/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(".fancybox").fancybox();
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


<header class="header-1 ">
    <div class="header">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <div class="header_logo">
                        <a href="/" title="luchiki" rel="home">
                            <div><img src="/luchiki48.ru/img/logo-color.png" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="collapse yamm navbar-collapse menu-margin-right-2">
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
