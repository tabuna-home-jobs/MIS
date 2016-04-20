<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex"/>
    <link href="/sokzn48.ru/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>@yield('title') - Семейный оздоровительный комплекс «СОК»</title>
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
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/sokzn48.ru/theme/css/full_styles.min.css">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/theme/css/woocommerce-smallscreen.css">
    <link rel="stylesheet" href="/sokzn48.ru/theme/css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="/sokzn48.ru/theme/js/all.min.js"></script>
    <script src="/sokzn48.ru/theme/js/cloudflare.min.js"></script>
    <script src="/sokzn48.ru/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/sokzn48.ru/theme/css/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/sokzn48.ru/theme/css/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(".fancybox, .highslide").fancybox();
        });
    </script>

</head>

<body>
<!--Верхняя плашка с адресами-->
<div class="site-top site-top-4 header-4">
    <div class="container">
        <div class="site-top-left">

            <div class="site-top-content">
                <ul>
                    <li><i class="fa fa-phone-square"></i>+7 (4742) 71 51 15</li>
                </ul>
            </div>
            <div class="site-top-content">
                <i class="fa fa-home"></i>г. Липецк, ул. Октябрьская, 61
            </div>
            <div class="site-top-content">
                <i class="fa fa-at"></i>sok@zdorovie48.ru
            </div>



        </div>
        <div class="site-top-right">
            <ul class="social-link">
                <li><a href="https://vk.com/club48185728" target="_blank"><i class="fa fa-vk"></i></a></li>
               <!-- <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
                <li><a href="https://www.ok.ru/blagorozhd" target="_blank"><i class="fa fa-odnoklassniki"></i></a></li>
                <li><a href="https://www.facebook.com/groups/1533000573664695/" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
                            <div><img src="/sokzn48.ru/img/logo_blue.png" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="collapse yamm navbar-collapse ">
                    <!--Меню-->
                    {!!Menu::getMenuByLayout('9','Верхнее меню','','menu')!!}
                    <!--Меню-->



                    <form class="navbar-form navbar-form-sm pull-left nav-search"  role="search" action="/search" method="post">
                        {!! csrf_field() !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="Поиск по ...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
                        </div>
                    </form>

                </div>








            </div>
        </nav>
    </div>
</header>


<!--Шапка и меню-->
@yield('content')
@include('sokzn48ru/footer')
