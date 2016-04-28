<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Медицинская информационная система</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <link href="{{asset('/menu/menu.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="/dash/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/dash/bootstrap/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/dash/plugins/select2/select2.css" />
    <link rel="stylesheet" href="/dash/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/dash/css/app.css" type="text/css" />
    <meta name="token" content="{{ csrf_token() }}" >
    <link href="{{ asset('/dash/bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/dash/bootstrap/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/dash/dist/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />


    <script src="/dash/bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
        var menus = {
            "oneThemeLocationNoMenus" : "",
            "moveUp" : "Вверх",
            "moveDown" : "Вних",
            "moveToTop" : "В начало",
            "moveUnder" : "До %s",
            "moveOutFrom" : "Под  %s",
            "under" : "После %s",
            "outFrom" : "За from %s",
            "menuFocus" : "%1$s. элемент меню %2$d из %3$d.",
            "subMenuFocus" : "%1$s. Меню суб-элемента %2$d из %3$s."
        };
    </script>


</head>
<body>
<div class="app app-header-fixed app-aside-fixed container app-aside-dock app-aside-folded ">

    <!-- header -->
    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-dark">
            <button class="pull-right visible-xs dk" ui-toggle="show" target=".navbar-collapse">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
            <!-- brand -->
            <a href="/dashboard/" class="navbar-brand text-lt">
                <i class="fa fa-hospital-o"></i>
            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">

            <!-- link and dropdown -->
            <ul class="nav navbar-nav hidden-sm">

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                        {{Session::get('SiteName')}}   <span class="fa fa-dedent fa-fw text"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">

                        @foreach(Sites::get() as $site)
                            <li><!-- start notification -->
                                <a href="/dashboard/sites/select/{{$site->id}}">
                                    <i class="fa fa-users text-aqua"></i> {{$site->name}}
                                </a>
                            </li><!-- end notification -->
                        @endforeach

                    </ul>
                </li>
            </ul>
            <!-- / link and dropdown -->

            <!-- search form -->
            <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm bg-light no-border rounded padder" placeholder="Поиск ...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </div>
            </form>
            <!-- / search form -->

            <!-- nabar right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="visible-xs-inline">Notifications</span>
                        <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu w-xl animated fadeInUp">
                        <div class="panel bg-white">
                            <div class="panel-heading b-light bg-light">
                                <strong>You have <span>2</span> notifications</strong>
                            </div>
                            <div class="list-group">
                                <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                </a>
                                <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                                </a>
                            </div>
                            <div class="panel-footer text-sm">
                                <a href class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                            </div>
                        </div>
                    </div>
                    <!-- / dropdown -->
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                        <span class="hidden-sm hidden-md">{{Sentry::getUser()->first_name }}</span> <b class="caret"></b>
                    </a>
                    <!-- dropdown -->
                    <ul class="dropdown-menu animated fadeInRight w">

                        <li>
                            <a href="/dashboard/user">
                                <span class="badge bg-danger pull-right">В процессе</span>
                                <span>Пользователи</span>
                            </a>
                        </li>

                        <li>
                            <a href="/dashboard/user">
                                <span class="badge bg-danger pull-right">В процессе</span>
                                <span>Группы</span>
                            </a>
                        </li>


                        <li class="divider"></li>
                        <li>
                            <a href="/auth/logout">Выйти</a>
                        </li>
                    </ul>
                    <!-- / dropdown -->
                </li>
            </ul>
            <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
    </header>
    <!-- / header -->

    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">
                <!-- user -->
                <div class="clearfix hidden-xs text-center hide" id="aside-user">
                    <div class="dropdown wrapper">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                                <span class="arrow top hidden-folded arrow-info"></span>
                                <div>
                                    <p>300mb of 500mb used</p>
                                </div>
                                <div class="progress progress-xs m-b-none dker">
                                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                                </div>
                            </li>
                            <li>
                                <a href>Settings</a>
                            </li>
                            <li>
                                <a href="page_profile.html">Profile</a>
                            </li>
                            <li>
                                <a href>
                                    <span class="badge bg-danger pull-right">3</span>
                                    Notifications
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_signin.html">Logout</a>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </div>
                    <div class="line dk hidden-folded"></div>
                </div>
                <!-- / user -->

                <!-- nav -->
                <nav ui-nav class="navi clearfix">
                    <ul class="nav">
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Навигация</span>
                        </li>



                        <li class="{{Active::route('dashboard..*')}}">
                            <a href="{{URL::route('dashboard..index')}}">
                                <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                                <span>Панель</span>
                            </a>
                        </li>




                        <li class="{{Active::route(['dashboard.page.*','dashboard.news.*'])}}">
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-file icon"></i>
                                <span>Контент</span>
                            </a>

                            <ul class="nav nav-sub dk">


                                @if(Config::get('dashboard.'.Session::get('SiteName').'.Страницы'))
                                    <li class="{{Active::route('dashboard.page.*')}}">
                                        <a href="{{URL::route('dashboard.page.index')}}">
                                            <i class="glyphicon glyphicon-file icon"></i>
                                            <span>Страницы</span>
                                        </a>
                                    </li>
                                @endif


                                @if(Config::get('dashboard.'.Session::get('SiteName').'.Блоки'))
                                    <li class="{{Active::route('dashboard.block.*')}}">
                                        <a href="{{URL::route('dashboard.block.index')}}">
                                            <i class="glyphicon glyphicon-th icon"></i>
                                            <span>Блоки</span>
                                        </a>
                                    </li>
                                @endif

                                @if(Config::get('dashboard.'.Session::get('SiteName').'.Новости'))
                                <li class="{{Active::route('dashboard.news.*')}}">
                                    <a href="{{URL::route('dashboard.news.index')}}">
                                        <i class="fa fa-newspaper-o icon"></i>
                                        <span>Новости</span>
                                    </a>
                                </li>
                                @endif

                                @if(Config::get('dashboard.'.Session::get('SiteName').'.Акции'))
                                <li class="{{Active::route('dashboard.shares.*')}}">
                                    <a href="{{URL::route('dashboard.shares.index')}}">
                                        <i class="fa fa-star"></i>
                                        <span>Акции</span>
                                    </a>
                                </li>
                                @endif

                                    @if(Config::get('dashboard.'.Session::get('SiteName').'.Статьи'))
                                        <li class="{{Active::route('dashboard.art.*')}}">
                                            <a href="{{URL::route('dashboard.art.index')}}">
                                                <i class="fa fa-file-word-o"></i>
                                                <span>Статьи</span>
                                            </a>
                                        </li>
                                    @endif




                            </ul>
                        </li>


                        <li class="{{Active::route('wmenuindex')}}">
                            <a href="{{URL::route('wmenuindex')}}">
                                <i class="glyphicon glyphicon-align-justify"></i>
                                <span>Меню</span>
                            </a>
                        </li>


                        <li class="{{Active::route('dashboard.feedback.*')}}">
                            <a href="{{URL::route('dashboard.feedback.index')}}">
                                <i class="glyphicon glyphicon-envelope icon"></i>
                                <span class="font-bold">Почта</span>
                            </a>
                        </li>
                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Компоненты</span>
                        </li>


                        <li class="{{Active::route('dashboard.filemanager.*')}}">
                            <a href="{{URL::route('dashboard.filemanager.index')}}">
                                <i class="glyphicon glyphicon-folder-open"></i>
                                <span>Файлы</span>
                            </a>
                        </li>


                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Отзывы'))
                        <li class="{{Active::route('dashboard.reviews.*')}}">
                            <a href="{{URL::route('dashboard.reviews.index')}}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Отзывы</span>
                            </a>
                        </li>
                        @endif


                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Галереи'))
                        <li>
                            <a href="">
                                <i class="fa fa-film "></i>
                                <span>Галереи</span>
                            </a>

                        <ul class="nav nav-sub dk">

                            <li class="{{Active::route('dashboard.gallery.*')}}">
                                <a href="{{URL::route('dashboard.gallery.index')}}">
                                    <i class="fa fa-picture-o"></i>
                                    <span>Фотогалерея</span>
                                </a>
                            </li>
                            <li class="{{Active::route('dashboard.video.*')}}">
                                <a href="{{URL::route('dashboard.video.index')}}">
                                    <i class="fa fa-video-camera"></i>
                                    <span>Видеогалерея</span>
                                </a>
                            </li>


                        </ul>
                        </li>
                        @endif


                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Опросы'))
                        <li class="{{Active::route('*surveys*')}}">
                            <a href="{{URL::route('surveys')}}">
                                <i class="fa fa-question"></i>
                                <span>Опросы</span>
                            </a>
                        </li>
                        @endif




                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Специалисты'))
                        <li class="{{Active::route('dashboard.special.*')}}">
                            <a href="{{URL::route('dashboard.special.index')}}">
                                <i class="fa fa-user-md"></i>
                                <span>Специалисты</span>
                            </a>


                            <ul class="nav nav-sub dk">

                                <li class="{{Active::route('dashboard.category.*')}}">
                                    <a href="{{URL::route('dashboard.spcat.index')}}">
                                        <i class="fa fa-medkit icon"></i>
                                        <span>Категории</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.news.*')}}">
                                    <a href="{{URL::route('dashboard.special.index')}}">
                                        <i class="fa fa-stethoscope"></i>
                                        <span>Специалисты</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Услуги'))
                        <li class="{{Active::route(['dashboard.category.*','dashboard.goods.*','dashboard.comments.*'])}}">
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                  <i class="fa fa-fw fa-angle-right text"></i>
                                  <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-ambulance icon"></i>
                                <span>Услуги</span>
                            </a>

                            <ul class="nav nav-sub dk">

                                <li class="{{Active::route('dashboard.category.*')}}">
                                    <a href="{{URL::route('dashboard.category.index')}}">
                                        <i class="fa fa-medkit icon"></i>
                                        <span>Категории</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.goods_group.*')}}">
                                    <a href="{{URL::route('goods_group')}}">
                                        <i class="fa fa-heart-o"></i>
                                        <span>Группы</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.news.*')}}">
                                    <a href="/dashboard/goods">
                                        <i class="fa fa-stethoscope"></i>
                                        <span>Услуги</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.comments.*')}}">
                                    <a href="{{URL::route('dashboard.comments.index')}}">
                                        <i class="fa fa-comment"></i>
                                        <span>Коментарии</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif



                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Энциклопедия'))
                        <li class="{{Active::route(['dashboard.encyclopediaCategory.*','dashboard.encyclopedia.*'])}}">
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-book icon"></i>
                                <span>Энциклопедия</span>
                            </a>

                            <ul class="nav nav-sub dk">

                                <li class="{{Active::route('dashboard.encyclopediaCategory.*')}}">
                                    <a href="{{URL::route('dashboard.encyclopediaCategory.index')}}">
                                        <i class="glyphicon glyphicon-bookmark"></i>
                                        <span>Разделы</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.encyclopedia.*')}}">
                                    <a href="{{URL::route('dashboard.encyclopedia.index')}}">
                                        <i class="fa fa-file-text-o"></i>
                                        <span>Статьи</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        @endif


                        @if(Config::get('dashboard.'.Session::get('SiteName').'.Вопрос/Ответ'))
                        <li class="{{Active::route(['dashboard.questanswer.*','dashboard.categoryanswer.*'])}}">
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="fa fa-graduation-cap icon"></i>
                                <span>Вопрос/Ответ</span>
                            </a>

                            <ul class="nav nav-sub dk">

                                <li class="{{Active::route('dashboard.categoryanswer.*')}}">
                                    <a href="{{URL::route('dashboard.categoryanswer.index')}}">
                                        <i class="fa fa-certificate icon"></i>
                                        <span>Категории</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.questanswer.*')}}">
                                    <a href="{{URL::route('dashboard.questanswer.index')}}">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span>Ответы</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @endif


                        <li class="{{Active::route(['dashboard.options.*','dashboard.seostatic.*'])}}">
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="fa fa-cogs icon"></i>
                                <span>Настройки</span>
                            </a>

                            <ul class="nav nav-sub dk">

                                <li class="{{Active::route('dashboard.options.*')}}">
                                    <a href="{{URL::route('dashboard.options.index')}}">
                                        <i class="fa fa-cog icon"></i>
                                        <span>Константы</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('dashboard.seostatic.*')}}">
                                    <a href="{{URL::route('dashboard.seostatic.index')}}">
                                        <i class="fa fa-globe"></i>
                                        <span>SEO</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- nav -->


            </div>
        </div>
    </aside>
    <!-- / aside -->

    <!-- content -->
    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">


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
            <!-- 123 -->
        @endif



            @yield('content')


        </div>
    </div>
    <!-- / content -->

    <!-- footer -->
    <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
            <span class="pull-right">2.0.1 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
            &copy; 2015 Copyright.
        </div>
    </footer>
    <!-- / footer -->

</div>

<script src="/dash/bootstrap/js/bootstrap.js"></script>
<script src="/dash/js/ui-load.js"></script>
<script src="/dash/js/ui-jp.config.js"></script>
<script src="/dash/js/ui-jp.js"></script>
<script src="/dash/js/ui-nav.js"></script>
<script src="/dash/js/ui-toggle.js"></script>
<script src="{{asset('/dash/bootstrap/js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('/dash/plugins/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<!--<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.textareaedit',
        height: 500,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]

    });</script>-->
<script src="{{asset('/dash/bootstrap/js/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/dash/dist/js/moment-with-locales.js')}}" type="text/javascript"></script>
<script src="{{asset('/dash/dist/js/ru-picker.js')}}" type="text/javascript"></script>
<script src="{{asset('/dash/dist/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>

</body>
</html>
