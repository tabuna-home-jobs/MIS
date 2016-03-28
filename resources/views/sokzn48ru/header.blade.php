<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex"/>
    <title></title>
    <link rel="stylesheet" href="/sokzn48.ru/theme/css/full_styles.min.css">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/theme/css/woocommerce-smallscreen.css">
    <link rel="stylesheet" href="/sokzn48.ru/theme/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="/sokzn48.ru/theme/js/all.min.js"></script>
    <script src="/sokzn48.ru/theme/js/cloudflare.min.js"></script>
    <script src="/sokzn48.ru/js/bootstrap.min.js"></script>
    <script src="/sokzn48.ru/js/custom.js"></script>
</head>
<body>
    <!--Шапка и меню-->
    <header class="header-4 ">
        <div class="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <div class="header_logo">
                            <a href="/" title="luchiki | Adorable Kindergarten - Just another WordPress site" rel="home">
                                <div><img src="/sokzn48.ru/img/logo_blue.png" alt="luchiki | Adorable Kindergarten - Just another WordPress site"></div>
                            </a>
                        </div>
                    </div>
                    <div class="icon-search-menu"><i class="fa fa-search"></i></div>
                    <div class="collapse yamm navbar-collapse">
                        <!--Меню-->
                        {!!Menu::getMenuByLayout('9','Верхнее меню','','menu')!!}
                        <!--Меню-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Шапка и меню-->
@yield('content')
@include('sokzn48ru/footer')
