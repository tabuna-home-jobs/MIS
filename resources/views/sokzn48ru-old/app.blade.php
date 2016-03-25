<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="robots" content="noindex"/>

    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>семейный оздоровительный комплекс - @yield('title')</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,300,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/sokzn48.ru/components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sokzn48.ru/css/style.css">
    <link rel="stylesheet" href="/sokzn48.ru/css/app.css">
    <script src="/sokzn48.ru/components/jquery/dist/jquery.min.js"></script>


    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('avatar')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image:src" content="@yield('avatar')"/>

</head>
<body>


<header id="header" class="navbar bg-white-only">


    <nav class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand  text-info "><span class="h3 icon-soc-logo"></span></a>
        </div>
        <div class="navbar-collapse collapse" aria-expanded="false">
            <ul class="nav navbar-nav">
                {!!Menu::getLI('9','Верхнее меню')!!}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="m-t-sm">
                        <a  data-toggle="modal" data-target="#myfeedback" class="btn btn-info btn-sm">Войти</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</header>


@yield('content')


<footer id="footer">
    <div class="bg-white">
        <div class="container">
            <div class="row m-t-md">
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><i class="fa fa-bars"></i><span class="b-b b-dark font-bold"> Информация</span>
                    </h4>

                </div>
                <div class="col-sm-6 text-center">

                    <ul class="nav navbar-nav">
                        {!!Menu::getLI('9','Нижнее меню')!!}
                    </ul>


                </div>
                <div class="col-sm-3">
                    <div class="w-full">
                        <ul class="fa-ul">
                            <li class="m-b">г.Липецк, ул.Октябрьская, д.61</li>
                            <li class="m-b">(4742) 227-887</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bg-light dk">
        <div class="container">
            <div class="row padder-v">
                <div class="col-md-3">
                    <span class="fa fa-3x icon-soc-logo"></span>
                </div>
                <div class="col-xs-6 text-center">
                    <div>© ООО «Здоровье Нации»</div>
                    <small>Использование информации только с письменного разрешения</small>
                </div>
                <div class="col-xs-3 text-right">
                    <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-odnoklassniki"></i></a>
                    <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-vk"></i></a>
                    <a href="#top" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-arrow-up"></i></a>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myfeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Записаться на приём</h4>
            </div>
            <form action="/feedback" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" name="fio" placeholder="ФИО"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email"
                               placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone"
                               placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                                                <textarea name="message" class="form-control" rows="4" required
                                                          placeholder="Текст сообщения"></textarea>
                    </div>
                    {{csrf_field()}}
                            <!--<input type="submit" class="btn btn-info" value="Отправить">-->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-info">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="/sokzn48.ru/components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/sokzn48.ru/components/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/sokzn48.ru/components/fancybox/jquery.fancybox.pack.js"></script>

<script>
    $("a[href='#top']").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    $(document).ready(function(){
        $(".fancybox").fancybox();
    });
</script>


</body>
</html>
