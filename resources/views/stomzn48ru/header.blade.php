<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
    <title>WTF TITLE</title>

    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/fonts/font.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/theme/css/bootstrap.min.css">

</head>
<body>
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
                                    <a href="http://vk.com/zdorovie_nacii48" alt="Мы вконтакте" title="Мы вконтакте"></a>
                                    <a href="http://www.odnoklassniki.ru/group52174602436776" alt="Мы в одноклассниках" title="Мы в одноклассниках"></a>
                                    <a href="https://www.facebook.com/groups/zdorovie48/ " alt="Мы на фейсбуке" title="Мы на фейсбуке"></a>
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
            <div class="banner-carousel">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/stomzn48.ru/img/banner1.png" alt="...">
                            <div class="carousel-caption container">
                                <div>
                                    Станьте обладателем белоснежной
                                    Улыбки всего за два визита к
                                    Стоматологу!
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    -->
                </div>
                <div class="form-consult container">
                    <div class="form-zapisi">
                        <form>
                            <div class="form-group">
                                <div>ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</div>
                                <input required placeholder="Ваше имя:"><input required placeholder="Ваш телефон:"><input required placeholder="Ваш E-mail:">
                                <textarea required placeholder="Подробнее:"></textarea>
                                <div><button>ОТПРАВИТЬ</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- banner-menu end -->
</div>
@yield('content')
@include('stomzn48ru/footer')
