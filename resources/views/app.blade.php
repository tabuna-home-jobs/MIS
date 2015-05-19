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

    <link href="{{ asset('/admin/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


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
    <script src="{{asset('/admin/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>


</head>



    @if('show' == Session::get('Sidebar', 'show'))
        <body class="skin-blue layout-boxed sidebar-mini">
    @else
        <body class="skin-blue layout-boxed sidebar-mini sidebar-collapse">
    @endif

<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/dashboard" class="logo"> <i class="fa fa-home"></i> <b> МИС</b></a>

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

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="/dashboard/"><i class="fa fa-bar-chart"></i> <span> Статистика</span></a>
                </li>
                <li><a href="/dashboard/page/"><i class="fa fa-file-text"></i> <span>Страницы</a></li>
                <li><a href="/dashboard/news/"><i class="fa fa-newspaper-o"></i> <span>Новости</a></li>
                <li><a href="/dashboard/shares/"><i class="fa fa-file-text"></i> <span>Акции</a></li>
                <li><a href="/dashboard/menu/"><i class="glyphicon glyphicon-menu-hamburger"></i> <span>Меню</span></a>
                </li>
                <li><a href="/dashboard/feedback/"><i class="glyphicon fa fa-inbox"></i> <span>Обратная связь</span></a>
                </li>


                <li class="treeview">
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span>Каталог</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/dashboard/category/"><i class="fa fa-suitcase"></i> <span>Категории</span></a>
                        </li>
                        <li><a href="/dashboard/goods/"><i class="fa fa-stethoscope"></i> <span>Услуги</span></a></li>
                        <li><a href="/dashboard/comments"><i class="fa fa-file-text"></i> <span>Комментарии</span></a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-info-sign"></i> <span>Опросы</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/dashboard/surveys"><i class="fa fa-question-circle"></i><span>Анкеты</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-question"></i><span>Вопросы</span></a></li>
                        <li><a href="#"><i class="fa fa-pie-chart"></i><span>Статистика</span></a></li>
                    </ul>
                </li>

                <li><a href="/dashboard/reviews"><i class="fa fa-file-text"></i> <span>Отзывы</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book"></i> <span>Энциклопедия</span></a></li>


                <li>
                    <a href="/dashboard/appointments">
                        <i class="fa fa-calendar"></i> <span>Запись на приём</span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-globe"></i> <span>Социальные сети</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-vk"></i>Вконтакте</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Однокласники</a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#"><i class="fa fa-user"></i> <span>Пользователи</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/dashboard/user"><i class="fa fa-user"></i> Пользователи</a></li>
                        <li><a href="/dashboard/groups"><i class="fa fa-users"></i> Группы</a></li>
                        <li><a href="#"><i class="fa fa-users"></i> Клиенты</a></li>
                    </ul>
                </li>

                <li><a href="/dashboard/chat"><i class="fa fa-users"></i> <span>Консультант</span></a></li>
                <li><a href="/dashboard/filemanager"><i class="fa fa-upload"></i> <span>Файловый менеджер</span></a>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-cog"></i> <span>Настройки</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
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






</body>
</html>
