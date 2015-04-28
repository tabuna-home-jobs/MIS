<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Панель управления| МИС</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="token" content="{{ csrf_token() }}" >
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/admin/bootstrap/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />


     <!-- Theme style -->
    <link href="{{ asset('/admin/dist/css/AdminLTE.min.css') }}"  rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('/admin/bootstrap/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/dist/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>



    @if('show' == Session::get('Sidebar', 'show'))
        <body class="skin-blue layout-boxed">
    @else
        <body class="skin-blue layout-boxed sidebar-collapse">
    @endif

<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/dashboard" class="logo"><b>Управление</b> МИС</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" id="sidebarcollapse" data-toggle="offcanvas" role="button">
                <span class="sr-only">Навигация</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">8</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header text-center">У вас 8 сообщения</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Юлия Алексеева
                                                <small><i class="fa fa-clock-o"></i> 5 минут</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Как можно до вас добраться?</p>
                                        </a>
                                    </li><!-- end message -->


                                </ul><!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">Перейти в чат</a></li>
                        </ul>
                    </li><!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-sitemap"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header  text-center">Выберите веб-сайт:</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">

                                    @foreach(Sites::get() as $site)
                                        <li><!-- start notification -->
                                            <a href="/dashboard/sites/select/{{$site->id}}">
                                                <i class="fa fa-users text-aqua"></i> {{$site->name}}
                                            </a>
                                        </li><!-- end notification -->
                                    @endforeach

                                </ul>
                            </li>
                            <li class="footer"><a href="/dashboard/sites/">Смотреть все</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">У Вас 9 задач</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Кнопка
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Завершено</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">Смотреть всё</a>
                            </li>
                        </ul>
                    </li>


                    <li class=" tasks-menu">
                        <a href="/auth/logout" title="Выйти" >
                           <i class="fa fa-sign-out"></i>
                        </a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" type="search" id="search" placeholder="Поиск..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Меню</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="/dashboard/"><span class="fa fa-bar-chart"></span> Статистика</a></li>
                <li><a href="/dashboard/page/"><span class="fa fa-file-text"></span> Страницы</a></li>
                <li><a href="/dashboard/news/"><span class="fa fa-newspaper-o"></span> Новости</a></li>
                <li><a href="/dashboard/shares/"><span class="fa fa-file-text"></span> Акции</a></li>
                <li><a href="/dashboard/menu/"><span class="glyphicon glyphicon-menu-hamburger"></span> Меню</a></li>
                <li><a href="/dashboard/feedback/"><span class="glyphicon fa fa-inbox"></span> Обратная связь</a></li>


                <li class="treeview">
                    <a href="#"><span class="fa fa-shopping-cart"></span> Каталог <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/dashboard/category/"><span class="fa fa-suitcase"></span> Категории</a></li>
                        <li><a href="/dashboard/goods/"><span class="fa fa-stethoscope"></span> Услуги</a></li>
                        <li><a href="/dashboard/comments"><span class="fa fa-file-text"></span> Комментарии</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><span class="glyphicon glyphicon-info-sign"></span> Опросы <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/dashboard/surveys"><span class="fa fa-question-circle"></span>Анкеты</a></li>
                        <li><a href="#"><span class="fa fa-question"></span>Вопросы</a></li>
                        <li><a href="#"><span class="fa fa-pie-chart"></span>Статистика</a></li>
                    </ul>
                </li>

                <li><a href="/dashboard/reviews"><span class="fa fa-file-text"></span> Отзывы</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-book"></span> Энциклопедия</a></li>


                <li class="treeview">
                    <a href="#"><span class="glyphicon glyphicon-globe"></span> Социальные сети <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#"><span class="fa fa-vk"></span>Вконтакте</a></li>
                        <li><a href="#"><span class="fa fa-circle-o"></span>Однокласники</a></li>
                        <li><a href="#"><span class="fa fa-facebook-official"></span>Facebook</a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span>Instagram</a></li>
                    </ul>
                </li>




                <li><a href="/dashboard/user"><span class="fa fa-user"></span> Пользователи</a></li>
                <li><a href="/dashboard/chat"><span class="fa fa-users"></span> Консультант</a></li>

                <li class="treeview">
                    <a href="#"><span class="fa fa-cog"></span> Настройки <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">


                        @foreach(Sites::get() as $site)
                            <li><!-- start notification -->
                                <a href="#">{{$site->name}}</a>
                            </li><!-- end notification -->
                        @endforeach

                    </ul>
                </li>
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="box-body">


        @if (Session::has('good'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>	<i class="icon fa fa-check"></i> Успех!</h4>
                {{Session::get('good')}}
            </div>
        @elseif(Session::has('bad'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Что то пошло не так!</h4>
                {{Session::get('bad')}}
            </div>
        @endif
        </div>


        @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Ошибка!</strong> Пожалуйста проверте вводимые данные.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif






        @yield('content')

    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Мы следим за тобой!
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="http://octavian48.ru">Октавиан</a>.</strong>
    </footer>

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset('/admin/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('/admin/dist/js/app.min.js')}}" type="text/javascript"></script>

<script src="{{asset('/admin/dist/js/moment-with-locales.js')}}" type="text/javascript"></script>
<script src="{{asset('/admin/dist/js/ru-picker.js')}}" type="text/javascript"></script>

<script src="{{asset('/admin/dist/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>



    <script src="{{asset('/admin/bootstrap/js/search.js')}}" type="text/javascript"></script>



<script src="{{asset('/admin/bootstrap/js/custom.js')}}" type="text/javascript"></script>




<!--  TinyMCE -->
<script src="{{asset('/admin/plugins/tinymce/tinymce.min.js')}}" type="text/javascript"></script>






</body>
</html>
