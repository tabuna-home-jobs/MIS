<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/css/slick.css">

    <link rel="stylesheet" type="text/css" href="/mother-baby.ru/style.css">
    <title>Центр детского здоровья</title>
    <script type="text/javascript" src="/mother-baby.ru/js/jquery.js"></script>
    <script type="text/javascript" src="/mother-baby.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/mother-baby.ru/js/slick.min.js"></script>

</head>
<body>
<!--header-->
<div class="header container">
    <div class="row">
        <div class="logo col-md-3"><img src="/mother-baby.ru/img/logo.png"></div>
        <div class="header-info col-md-9">
            <div class="head-top-block col-md-12">
                <span>+7 (4742) 227-887</span>
                г. Липецк, ул. Советская, д. 66; ул. Фрунзе, д.14
                <a href="">mother-baby@mail.ru</a>
                <img src="/mother-baby.ru/img/heart.png">
                <a href="">добавить в закладки</a>
            </div>
            <div class="head-bottom-block-1 col-md-6">
                Оказание высококвалифицированной медицинской
                и психологической помощи детям и подросткам
            </div>
            <div class="head-bottom-block-2 col-md-6">
                <div class="social col-md-5">
                    <a href=""><img src="/mother-baby.ru/img/vk.png"></a>
                    <a href=""><img src="/mother-baby.ru/img/ok.png"></a>
                    <a href=""><img src="/mother-baby.ru/img/fb.png"></a>
                </div>
                <div class="schedule col-md-7">
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
                    <li><a href="#">Запись</a></li>
                    <li><a href="#">ON-LINE</a></li>
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