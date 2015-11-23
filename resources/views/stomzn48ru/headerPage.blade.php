<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="/stomzn48.ru/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stomzn48.ru/css/style.css">
    <link rel="stylesheet" href="/stomzn48.ru/css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/css/slick.css">
    <script src="/stomzn48.ru/js/jquery.min.js"></script>
    <script src="/stomzn48.ru/js/jquery.mousewheel.min.js"></script>
    <script src="/stomzn48.ru/js/jquery.easing.min.js"></script>
    <script src="/stomzn48.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/js/slick.min.js"></script>
    <script>
        $(document).mousewheel(function(event) {
            console.log(event.deltaX, event.deltaY, event.deltaFactor);
        });
    </script>
</head>
<body>
<style>
    .menu-container {
        position: relative;
    }
</style>
<div class="header">
    <div class="header-bg"></div>
    <div class="container">
        <div class="links">
            <img src="/stomzn48.ru/img/enter.png"><a href="" title="Вход в личный кабинет ">Вход</a>
            <img src="/stomzn48.ru/img/reg.png"><a href="" title="Регистрация новго пользователя">Регистрация</a>
        </div>
        <div class="top-contacts">
            <div class="row">
                <div class="col-md-4">
                    <div class="company-description">
                        <div>Лечение и протезирование зубов в липецке</div>
                        <div class="social">
                            <div class="row">
                                <div class="col-md-7">Присоединяйтесь к нам в соцсетях:</div>
                                <div class="col-md-5 social-links">
                                    <a href="" alt="" title=""></a>
                                    <a href="" alt="" title=""></a>
                                    <a href="" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 logo">
                    <a href="/"><img alt="Здоровье нации <<Стоматология>>" title="Главная страница" src="/stomzn48.ru/img/logo.png"></a>
                </div>
                <div class="col-md-4 addres-top">
                    <div>г. Липецк, ул.Советская, д. 66; ул.Фрунзе, д.14</div>
                    <div><span>+7 (4742) </span>227-887</div>
                    <div><button><span>ЗАКАЗАТЬ ЗВОНОК</span><span></span></button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-menu">
        <div class="container-fluid">
            <!-- МЕНЮ -->
            <div class="container menu-container">
                <nav class="navbar navbar-default navbar-custom">
                    <div class="navbar-double"></div>
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav custom-nav">
                                {!! Menu::getLi(10,'topmain','') !!}
                                        <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group custom-loop">
                                    <input type="text" class="form-control" placeholder="Поиск по сайту">
                                    <button type="submit" class="btn btn-default"></button>
                                </div>

                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- МЕНЮ end -->

        </div>
    </div><!-- banner-menu end -->
</div>
@yield('content')
@include('stomzn48ru/footer')