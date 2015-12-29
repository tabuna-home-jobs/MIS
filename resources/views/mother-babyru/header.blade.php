<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/style.css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
    <title>Центр детского здоровья</title>
</head>
<body id="vueMain">
<!--header-->
<div class="header container">
    <div class="row">
        <div class="logo col-md-3"><img src="/mother-baby.ru/img/logo.png"></div>
        <div class="header-info col-md-9">
            <div class="head-top-block col-md-12">
                <a class="bold-font" href="tel:+74742227887">+7 (4742) 227-887</a>
                <span>г. Липецк, ул. Советская, д. 66,  ул. Фрунзе, д.14</span>
                <br class="visible-xs">
                <a href="mialto:mother-baby@mail.ru">mother-baby@mail.ru</a>
                <img src="/mother-baby.ru/img/heart.png">
                <a href="" onclick="return addFavorite(this);">добавить в закладки</a>
            </div>
            <div class="head-bottom-block-1 col-md-6">
                Оказание высококвалифицированной медицинской
                и психологической помощи детям и подросткам
            </div>
            <div class="head-bottom-block-2 col-md-6">
                <div class="social col-md-4">
                    <a href=""><img src="/mother-baby.ru/img/vk.png"></a>
                    <a href=""><img src="/mother-baby.ru/img/ok.png"></a>
                    <a href=""><img src="/mother-baby.ru/img/fb.png"></a>
                </div>
                <div class="schedule col-md-8">
                    Пн-Пт: 8:00-21:00<br>
                    Сб: 8:00-18:00<br>
                    Вс: 10:00-16:00 (в режиме записи)
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default menu1">
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
                <ul class="nav navbar-nav">
                    <li><a href="#">О центре</a></li>
                    <li><a href="#">Лицензии</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Запись ON-LINE</a></li>
                    <li><a href="#">Специалисты</a></li>
                    <li><a href="#">Наши услуги</a></li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Вопрос-ответ</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<!-- end of header-->
@yield('content')
@include('mother-babyru/footer')