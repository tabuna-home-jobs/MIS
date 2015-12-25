<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/luchiki48.ru/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/sokzn48.ru/style.css">
    <link rel="stylesheet" type="text/css" href="/stomzn48.ru/css/animate.min.css">
    <title>COK</title>
    <script type="text/javascript" src="/sokzn48.ru/js/jquery.js"></script>
    <script type="text/javascript" src="/sokzn48.ru/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/sokzn48.ru/js/slick.min.js"></script>
    <script type="text/javascript" src="/stomzn48.ru/js/scrollspy.js"></script>

</head>
<body>
<!-- HEADER -->
<div class="header container">
    <div class="row">
        <div class="header-top col-md-12"><a href="">Вход</a><a href="">Регистрация</a></div>
        <div class="header-left col-md-5 col-sm-12">
            <p>Семейный оздоровительный комплекс «СОК» ГК «Здоровье нации»</p>
            <p><img src="/sokzn48.ru/img/time.png">с 9.00 до 21.00 без перерыва и выходных</p>
            <p>
                <span>Присоеденяйтесь к нам в соцсетях:</span>
                <span><img src="/sokzn48.ru/img/vk.png"><img src="/sokzn48.ru/img/ok.png"><img src="/sokzn48.ru/img/fb.png"></span>
            </p>
        </div>
        <div class="header-center col-md-3 col-sm-12">
            <img src="/sokzn48.ru/img/logo.png">
        </div>
        <div class="header-right col-md-4 col-sm-12">
            <p>г. Липецк, ул. Октябрьская, д.61</p>
            <p>8 (4742)<span>23-05-23</span></p>
            <p><a href="">qwerty@asdfgh.ru</a></p>
            <button>ЗАКАЗАТЬ ЗВОНОК</button>
        </div>
    </div>
    <div class="row">
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
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О комплексе</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Акции и Новинки</a></li>
                        <li><a href="#">Фото и Видео</a></li>
                        <li><a href="#">Каталог услуг</a></li>
                        <li><a href="#">Наши специалисты</a></li>
                        <li><a href="#">Расписание</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!-- END HEADER -->
<div class="slider container">
    <div class="row">
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
                    <img src="/sokzn48.ru/img/slider.png" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/sokzn48.ru/img/slider.png" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
@yield('content')
@include('sokzn48ru/footer')