@extends('cozn48ru/header')

@section('content')


<div class="img_slider container">

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
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->

    </div>
</div>
<!--end of img_slider-->

<div class="dostoinstva">
    <div class="container">
        <div class="dost col-sm-12">
            <h2>ДОСТОИНСТВА ОСТЕОПАТИИ</h2>

            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f1.png">

                <p>Безопасна<br> и безболезненна</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f2.png">

                <p>Это лечение,<br> предложенное<br> самой природой</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f3.png">

                <p>Основана на<br> фундаментальном<br> знании врачом<br> анатомии</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f4.png">

                <p>Позволяет обнаружить<br> первопричину<br> заболевания<br> и быстро устранить её</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f5.png">

                <p>Эффективна</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="cozn48.ru/img/f6.png">

                <p>Не требует<br> длительного<br> лечения</p>
            </div>
        </div>
    </div>
</div>
<!--end of dostoinstva-->
<div class="reasons">
    <div class="container">

        <h2>ПРИЧИНЫ ДЛЯ ОБРАЩЕНИЯ К ОСТЕОПАТУ</h2>

        <div class="crosses col-sm-12">
            <div class="block1 col-sm-6 col-xs-12">
                <div><img src="cozn48.ru/img/cross.png"> Невралгии, радикулиты</div>
                <div><img src="cozn48.ru/img/cross.png"> Боли в суставах и различных отделах позвоночника</div>
                <div><img src="cozn48.ru/img/cross.png"> Грыжи межпозвонковых дисков</div>
                <div><img src="cozn48.ru/img/cross.png"> Головные боли, головокружения, мигрени</div>
                <div><img src="cozn48.ru/img/cross.png"> Гипертонию, гипотонию</div>
                <div><img src="cozn48.ru/img/cross.png"> Плоскостопие</div>
                <div><img src="cozn48.ru/img/cross.png"> Последствия травм</div>
                <div><img src="cozn48.ru/img/cross.png"> Заболевания ЖКТ, печени и желчевыводящих путей</div>
            </div>
            <div class="block2 col-sm-6 col-xs-12">
                <div><img src="cozn48.ru/img/cross.png"> Болезни органов малого таза</div>
                <div><img src="cozn48.ru/img/cross.png"> Гаймориты, отиты, этмоидиты</div>
                <div><img src="cozn48.ru/img/cross.png"> Бронхит, бронхиальную астму</div>
                <div><img src="cozn48.ru/img/cross.png"> Родовые травмы у детей</div>
                <div><img src="cozn48.ru/img/cross.png"> Внутричерепную гипертензию у детей</div>
                <div><img src="cozn48.ru/img/cross.png"> Гиперактивность, заикание, энурез</div>
                <div><img src="cozn48.ru/img/cross.png"> Последствия стрессов</div>
                <div><img src="cozn48.ru/img/cross.png"> Ведение беременности и подготовка к родам</div>
            </div>
        </div>
    </div>
    <!--end of crosses-->
</div>
<!--end of reasons-->
<div class="appointment">
    <h2>ЗАПИСАТЬСЯ НА ПРИЁМ</h2>
    <div class="container">
        <div class="doctor col-lg-6 col-md-6 hidden-sm hidden-xs"><img src="cozn48.ru/img/doctor.png"></div>
        <div class="appointment-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="app-header">
                <div class="circle">1</div>
                <div class="circle">2</div>
                <div class="circle">3</div>
                <div class="step">Шаг 1</div>
                <div class="step">Шаг 2</div>
                <div class="step">Шаг 3</div>
            </div>
            <form>
                <div class="description-form">Выберите место</div>
                <div class="input-form"><select></select></div>
                <div class="description-form">Специализация</div>
                <div class="input-form"><select></select></div>
                <div class="description-form">Врач</div>
                <div class="input-form"><select></select></div>
                <div class="fbtn"><button>ДАЛЕЕ</button></div>
            </form>
        </div>
    </div>
</div>

<h2>НАШИ СПЕЦИАЛИСТЫ</h2>

<div class="specialists ">
    <div class="container">

        <div class="best col-lg-3">
            <div class="bpart1">
                <img src="cozn48.ru/img/sotrudnik_main.png">
            </div>
            <div class="bpart2">
                <img src="cozn48.ru/img/figurephoto.png">
            </div>
            <div class="textmonth"> ВРАЧ МЕСЯЦА</div>
            <div class="textstepname"><strong>Кедровская</strong><br> Наталья Борисовна</div>
            <div class="tsspec">
                Специалист по массажу<br> высшей категории,<br>
                специализация:<br> медицинский массаж
            </div>
        </div>
        <div class="everypeople col-lg-9">
            <div class="p1 col-lg-4  col-md-4 col-sm-6">
                <div class="people">
                    <img style="vertical-align: middle;" src="cozn48.ru/img/sotrudnik1.png">

                    <div class="ptext"><strong>Кабанов</strong><br>
                        Александр Дмитриевич
                        <div class="specialisation">специалист по массажу</div>
                    </div>
                </div>
                <div class="people">
                    <img src="cozn48.ru/img/sotrudnik4.png">

                    <div class="ptext"><strong>Кренева</strong><br>
                        Алеся Михайловна
                        <div class="specialisation">специалист по массажу</div>
                    </div>
                </div>
            </div>
            <div class="p2 col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <div class="people">
                    <img src="cozn48.ru/img/sotrudnik2.png">

                    <div class="ptext"><strong>Подовинникова</strong><br>
                        Юлия Владимировна
                        <div class="specialisation">специалист по массажу</div>
                    </div>
                </div>

                <div class="people">
                    <img src="cozn48.ru/img/sotrudnik5.png">

                    <div class="ptext"><strong>Жданова</strong><br>
                        Надежда Ивановна
                        <div class="specialisation">специалист по массажу</div>
                    </div>
                </div>
            </div>

            <div class="people col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <img src="cozn48.ru/img/sotrudnik3.png">

                <div class="ptext"><strong>Федоренко</strong><br>
                    Лилия Владимировна
                    <div class="specialisation">специалист по массажу</div>
                </div>
            </div>


            <div class="people col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <img src="cozn48.ru/img/sotrudnik6.png">

                <div class="ptext"><strong>Пищулина</strong><br>
                    Алина Валерьевна
                    <div class="specialisation">специалист по массажу<br>
                        высшей категории</div>
                </div>
            </div>

        </div>
    </div>
</div>
<div><!--end of specialists-->
    <br>
    <div class="seeall"><img src="cozn48.ru/img/minibutton.png"><a href="#">Посмотреть всех</a><br></div>
</div>
<br>
</div>


<div class="skidki">
    <br>

    <h2>СКИДКИ И АКЦИИ</h2>

    <div class="sk">
        <div class="container">
            <div class="sk1 col-xs-12 col-md-12 col-sm-12 col-lg-4"> <img src="cozn48.ru/img/skidki1.png"> </div>
            <div class="sk1 col-xs-12 col-md-12 col-sm-12 col-lg-4"> <img src="cozn48.ru/img/skidki2.png"> </div>
            <div class="sk1 col-xs-12 col-md-12 col-sm-12 col-lg-4"> <img src="cozn48.ru/img/skidki3.png"> </div>
        </div>
    </div>
    <br>
</div>

<!--end of skidki-->

<div class="news">
    <h2>НОВОСТИ</h2>

    <div class="container">
        <div class="news1 col-md-3 col-sm-6 col-xs-12">
            <img src="cozn48.ru/img/news1.jpg">
            <div class="s1"><a href="#">День рождения микрорайона Университетский вместе с ГК «Здоровье нации»</a></div>

            <div class="textnews1">
                Свой день рождения, 19 июня, микрорайон УНИВЕРСИТЕТСКИЙ г. Липецка, отметил - ЯРКО, СПОРТИВНО, АКТИВНО
                вместе с ГК «Здоровье нации»!
            </div>
            <div class="date1">
                23.06.2015
            </div>
        </div>
        <div class="news1 col-md-3 col-sm-6 col-xs-12">
            <img src="cozn48.ru/img/news2.jpg">
            <div class="s1"><a href="#">С Днем Рождения!</a></div>

            <div class="textnews1">
                Поздравляем с Днем Рождения врача-оториноларинголога, Тоспаева Рашида Рауфовича! Желаем счастья и добра,
                пусть будет к Вам судьба щедра! Мечты в реальность воплотятся, любовь и радость вечно длятся!
            </div>
            <div class="date1">
                23.06.2015
            </div>
        </div>
        <div class="news1 col-md-3 col-sm-6 col-xs-12">
            <img src="cozn48.ru/img/news3.jpg">
            <div class="s1"><a href="#">С Днем Рождения!</a></div>

            <div class="textnews1">
                Поздравляем с Днем Рождения медицинскую сестру, Люшненко Алину Эдуардовну! С днем рожденья поздравляем!
                Здоровья, успехов и счастья желаем, пусть мир улыбается солнышком ясным!
            </div>
            <div class="date1">
                23.06.2015
            </div>
        </div>
        <div class="news1 col-md-3 col-sm-6 col-xs-12">
            <img src="cozn48.ru/img/news4.jpg">
            <div class="s1"><a href="#">Группа компаний «Здоровье нации» pа счастливое и здоровое детство!</a></div>

            <div class="textnews1">
                31 мая в Парке Победы города Липецка для детей и их родителей Группа компаний «Здоровье нации» провела
                масштабный праздник
            </div>
            <div class="date1">
                23.06.2015
            </div>
        </div>
    </div>
</div>
<div class="sites-slider">
    <div class="container">
        <h2>САЙТЫ ГУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</h2>
        <div class="autoplay">
            <div class="sl-img"><img src="cozn48.ru/img/zn1.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn2.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn3.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn4.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn5.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn-blank.png"></div>
        </div>
        <script type="text/javascript">
            $('.autoplay').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
    </div>
</div>
<!--end of news-->
<br>

<div class="map">

    <script type="text/javascript" charset="utf-8"
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=nLG7p1-vbVZ40JWbYYtbBh9udCUS_5SM&width=100%&height=450"></script>

</div>
<!--end map-->
<div class="downhead">
    <div class="buttons footer-buttons">
        <nav class="navbar navbar-default container footer-nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="#">О ЦЕНТРЕ</a>
                        </li>

                        <li><a href="#">УСЛУГИ</a></li>
                        <li><a href="#">СПЕЦИАЛИСТЫ</a></li>
                        <li><a href="#">НОВОСТИ</a></li>
                        <li><a href="#">АКЦИИ</a></li>
                        <li><a href="#">ОТЗЫВЫ</a></li>
                        <li><a href="#">ПРАЙС-ЛИСТ</a></li>
                        <li><a href="#">СТАТЬИ</a></li>
                        <li><a href="#">КОНТАКТЫ</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!--end downhead-->
<div class="footer">
    <div class="container">
        <div class="footer1 col-sm-6">© ООО «Центр остеопатии» 2015</div>
        <div class="octavian col-sm-5">
            Разработка, поддержка
            и продвижение сайта
        </div>
        <div class="octav col-sm-1">
            <a href="#"><img src="cozn48.ru/img/octavian.png"></a>
        </div>
    </div>
    <div class="error">
        <a href="#" data-toggle="modal" data-target="#myModal">сообщить об ошибке</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form id="otchet" action="/" method="get">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Отчёт об ошибке</h4>
                    </div>
                    <div class="modal-body obltext">
                        <textarea name="report_error"></textarea>
                        <input name="hid_report" id="report_url_page" type="hidden">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button id="sendotchet" type="button" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--end footer-->
</body>
</html>
@endsection