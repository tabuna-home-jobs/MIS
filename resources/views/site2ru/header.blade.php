<!DOCTYPE html>
<html>

<head>
    <title>Здоровье Нации - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >




    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('avatar')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image:src" content="@yield('avatar')"/>





    <link rel='stylesheet' id='style_theme-css'  href='/site2.ru/wp-content/themes/medic-final/assets/css/style.css%3Fver=4.0.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='/site2.ru/wp-content/themes/medic-final/style.css%3Fver=4.0.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='/site2.ru/wp-content/plugins/js_composer/assets/css/js_composer.css%3Fver=4.3.3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_custom_css-css'  href='/site2.ru/wp-content/uploads/js_composer/custom.css%3Fver=4.3.3.css' type='text/css' media='screen' />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>




</head>




<body class="page page-id-207 page-template page-template-page-vc-php fixed-footer wpb-js-composer js-comp-ver-4.3.3 vc_responsive">

<main>

    <!-- ================================ -->
    <!-- ========== Begin Header ========== -->
    <!-- ================================ -->
    <header class="style_3 affix-menu" style="background: url(/site2.ru/wp-content/uploads/2014/09/photodune-370950-dental-checkup-l.jpg) 50% 0 no-repeat;">

        <!-- ===== Begin Navbar ===== -->
        <nav class="navbar navbar-default" role="navigation">

            <div class="container xsx-width">

                <!-- ===== Brand and toggle get grouped for better mobile display ===== -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="span-01"></span>
                        <span class="span-02"></span>
                        <span class="span-03"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                    <span class="logo contrast">
                        <span class="primary-logo">
                                                            <img id="logo" src="/site2.ru/wp-content/themes/medic-final/assets/img/logo_1.png" alt="Medic &#8211; Medical, Health and Hospital Wordpress Theme">
                                                    </span>
                        <span class="secondary-logo">
                            <img id="logo" src="/site2.ru/wp-content/themes/medic-final/assets/img/logo.png" alt="Medic &#8211; Medical, Health and Hospital Wordpress Theme">
                        </span>
                    </span>
                    </a>
                </div>
                <!-- ===== End Brand and Toggle ===== -->

                <!-- ===== Collect the nav links, forms, and other content for toggling ===== -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">

                    <ul id="menu-medic" class="nav navbar-nav navbar-right">






                        <li class="{{Active::route('appointment')}}"><a href="/appointment">Запись на приём</a></li>
                        <li><a href="#">Личный кабинет</a></li>
                        <li class="{{Active::route('medencyclopedia.*')}}"><a href="/medencyclopedia">Энциклопедия</a></li>
                        <li class="{{Active::route('blog.*')}}"><a href="/blog">Новости</a></li>





                    </ul>
                </div>
                <!-- ===== End Navbar-collapse ===== -->

            </div>

        </nav>
        <!-- ===== End Navbar ===== -->


        <!-- ===== Begin Breadcrumbs Header ===== -->
        <!-- ===== End Breadcrumbs Header ===== -->

        <div class="container xsx-width">
            <div class="row">
                <div class="departaments-owl">
                    <ul class="clearfix">
                        <li>
                            <div class="departament-item-owl"><i class="fa  fa-plus-square"></i>

                                <h3><a href="#">Здоровье нации</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-stethoscope"></i>

                                <h3><a href="index.html%3Fp=102.html">Ophthalmology</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>
                        <li>
                            <div class="departament-item-owl"><i class="fa fa-wheelchair"></i>

                                <h3><a href="index.html%3Fp=101.html">Laryngological</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-user-md"></i>

                                <h3><a href="index.html%3Fp=100.html">Cardiac</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>
                        <li>
                            <div class="departament-item-owl"><i class="fa fa-circle-o"></i>

                                <h3><a href="index.html%3Fp=99.html">Gynaecological</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-star"></i>

                                <h3><a href="index.html%3Fp=98.html">Surgery</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>
                        <li>
                            <div class="departament-item-owl"><i class="fa fa-heart"></i>

                                <h3><a href="index.html%3Fp=89.html">Pediatric</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-calendar-o"></i>

                                <h3><a href="index.html%3Fp=86.html">Health Care</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>

                        <li>
                            <div class="departament-item-owl"><i class="fa fa-heart"></i>

                                <h3><a href="index.html%3Fp=89.html">Pediatric</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-calendar-o"></i>

                                <h3><a href="index.html%3Fp=86.html">Health Care</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>

                        <li>
                            <div class="departament-item-owl"><i class="fa fa-heart"></i>

                                <h3><a href="index.html%3Fp=89.html">Pediatric</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                            <div class="departament-item-owl"><i class="fa fa-calendar-o"></i>

                                <h3><a href="index.html%3Fp=86.html">Health Care</a></h3>

                                <p>Etiam rhoncus nisi quis magna posuere, non tincidunt sem mattis. Nulla ftacilisi.
                                    Proin ornare ac leo et mattis. </p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- ================================ -->
    <!-- ========== End Header ========== -->
    <!-- ================================ -->







    @if (Session::has('good'))
        <div class="container alert-container">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Успех!</h4>
                {{Session::get('good')}}
            </div>
        </div>
    @elseif(Session::has('bad'))
        <div class="container alert-container">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-ban"></i> Что то пошло не так!</h4>
                {{Session::get('bad')}}
            </div>
        </div>
    @endif
</div>


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



@yield('content')



    @include('site2ru/footer')