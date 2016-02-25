<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <meta name="robots" content="noindex"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/cozn48.ru/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/cozn48.ru/style.css">
    <title>Центр остеопатии</title>
    <script type="text/javascript" src="/cozn48.ru/js/jquery.js"></script>
    <script type="text/javascript" src="/cozn48.ru/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/cozn48.ru/js/slick/slick.css"/>
    <meta name="robots" content="noindex"/>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script type="text/javascript" src="/cozn48.ru/js/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.fbtn').click(function(){
                if($(this).parent().next().length != 0){
                    $(this).parent().hide().next().show();
                }
            });

            $('.app-header .circle').click(function(){
                var data = $(this).attr('data-target');
                $('.appointment-form form>div').hide();
                $('.'+data+'').show();
            });


        });
    </script>
</head>
<body>


<div class="header">
    <div class="shapka container">
        <div class="logo col-md-3 col-sm-12 col-xs-12">
            <a href="/">
            <img src="/cozn48.ru/img/logo.png">
            </a>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="adress col-sm-4">
                <img src="/cozn48.ru/img/adress.png"> Липецк, ул. Фрунзе 14
            </div>
            <div class="socialnetwork col-sm-2 col-xs-12">
                <a href="http://vk.com">
                    <img src="/cozn48.ru/img/vk.png">
                </a>
                <a href="http://ok.ru">
                    <img src="/cozn48.ru/img/ok.png">
                </a>
                <a href="http://facebook.com">
                    <img src="/cozn48.ru/img/fb.png">
                </a>
            </div>
            <div class="phone col-sm-3 col-xs-12">
                <img src="/cozn48.ru/img/phone.png"> (4742) <span class="tel">227-887</span>
            </div>
            <div class="callback col-sm-3 col-xs-12">
                <a type="button" class="btn btn-lg button1" data-toggle="modal" data-target="#myModal">
                    обратный звонок
                </a>




                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Обратный звонок</h4>
                            </div>
                            <form action="/feedback" method="post">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>ФИО</label>
                                    <input type="text" name="fio" class="form-control" placeholder="ФИО" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <label>Телефон</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Телефон" >
                                </div>
                                <div class="form-group">
                                    <label>Сообщение</label>
                                    <textarea name="message" class="form-control" placeholder="Ваше сообщение"></textarea>
                                </div>
                                {{csrf_field()}}

                            </div>
                            <div class="modal-footer">
                                <button  type="submit" class="btn button1">Отправить</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    @if(Session::has('good'))
        <div class="alert alert-success">
            {{ Session::get('good') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="container alert-container">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Ошибка!</strong> Пожалуйста проверте вводимые данные.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="buttons">
        <nav class="navbar navbar-default container">
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
                        {!! Menu::getLi(6,'top','') !!}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
@yield('content')
@include('cozn48ru/footer')
