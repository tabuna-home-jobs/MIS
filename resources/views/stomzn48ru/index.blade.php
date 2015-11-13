@extends('stomzn48ru/header')
@section('content')
    <div class="advantages">
        <div class="container">
            <div class="heder-h2 col-md-12"><hr class="hidden-sm hidden-xs"><h2>ПРЕИМУЩЕСТВА НАШЕЙ КЛИНИКИ</h2></div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-lg-push-1">
                    <div class="item">
                        <div class="item-img">
                            <img src="/stomzn48.ru/img/adv1.png">
                        </div>
                        <div class="item-description">
                            Высоко квалифицированные
                            специалисты
                            с большим опытом
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-lg-push-1">
                    <div class="item">
                        <div class="item-img">
                            <img src="/stomzn48.ru/img/adv2.png">
                        </div>
                        <div class="item-description">
                            10 лет успешной
                            работы
                            клиники
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-lg-push-1">
                    <div class="item">
                        <div class="item-img">
                            <img src="/stomzn48.ru/img/adv3.png">
                        </div>
                        <div class="item-description">
                            У нас более 10 000
                            благодарных
                            пацментов
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-lg-push-1">
                    <div class="item">
                        <div class="item-img">
                            <img src="/stomzn48.ru/img/adv4.png">
                        </div>
                        <div class="item-description">
                            Мы используем
                            самые прогрессивные
                            технологии
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-lg-push-1">
                    <div class="item">
                        <div class="item-img">
                            <img src="/stomzn48.ru/img/adv5.png">
                        </div>
                        <div class="item-description">
                            Высоко квалифицированные
                            специалисты
                            с большим опытом
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="about-heder"><h2>О КОМПАНИИ</h2></div>
            <div class="about-content">
                <div class="row">
                    <div class="about-img col-md-4">
                        <img src="/stomzn48.ru/img/doc.png">
                    </div>
                    <div class="about-text col-md-8">
                        Россия познакомилась со стоматологией благодаря Петру I, который впервые
                        привёз из-за границы различные приспособления для лечения зубов. Первая
                        школа, которая занималась подготовкой зубных врачей, открылась в 1881 г. в
                        Санкт-Петербурге и уже к 1883 году из школы было выпущено более 450
                        дантистов.

                        В начале XX века уже было собрано много знаний в этой области и выпущено
                        много научных работ. Стали использоваться более современные инструменты
                        для лечения зубов, появились новые пломбировочные материалы, применялись
                        различные лекарственные вещества. Сначала стоматологами могли работать
                        только мужчины, но с 1875 г. такое право получили и женщины. После Великой
                        Отечественной войны стоматология развивалась особенно высокими темпами,
                        стали открываться новые стоматологические институты, проводились различные
                        исследования, выпускались новые бормашины и стоматологические установки.

                        В настоящее время стоматология шагнула далеко вперёд. Стала возможной
                        имплантация зубов и восстановление даже очень сильно разрушенного зуба,
                        появились качественные пломбировочные материалы и современные
                        инструменты для лечения зубов. Заболевания зубов являются наиболее
                        распространёнными болезнями человека. По статистическим данным, более 90 %
                        населения земного шара страдает болезнями зубов. Столь значительное
                        распространение этого недуга ставит перед органами здравоохранения задачи
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="heder-h2-white col-md-12"><hr><h2>НАШИ УСЛУГИ</h2></div>

            @foreach(GoodsMain::getGoods(10,46,4) as $item)
            <div class="service col-md-3 col-sm-6">
                <p><img src="{{$item['avatar']}}"></p>
                <p><a href="/service/{{$item['id']}}">{{$item['name']}}</a></p>
            </div>
            @endforeach

        </div>
    </div>
    <div class="akcii-heder"><h2>ТЕКУЩИЕ АКЦИИ</h2></div>
    <div class="akcii">
        <div class="container">
            <div class="counter col-md-8">
                <div class="elipse">
                    <h2>Акция!</h2>
                    <p>до конца акции осталось</p>
                    <div class="hour">
                        <span>1</span>
                        <span>1</span>
                        <p>часов</p>
                    </div>
                    <div class="minute">
                        <span>2</span>
                        <span>3</span>
                        <p>минут</p>
                    </div>
                    <div class="second">
                        <span>3</span>
                        <span>3</span>
                        <p>секунд</p>
                    </div>
                </div>
            </div>
            <div class="form-osmotr col-md-4">
                <p>Заполните форму и получите
        <span>профессиональный осмотр
        и гигиеническую чистку</span>
                    совершенно бесплатно!</p>
                <form>
                    <input>
                    <input>
                    <input>
                    <p>Ваши контактные данные находятся в безопасности и не будут переданы ни каким третьим лицам</p>
                </form>
                <div class="form-osmotr-button"><button>ОТПРАВИТЬ</button></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="heder-h2 col-md-12"><hr><h2>НОВОСТИ</h2></div>
        <div class="single-news col-md-3 col-sm-6">
            <p><img src="/stomzn48.ru/img/news1.png"></p>
            <a href="">Россия познакомилась со стоматологией благодаря Петру I, который впервые</a>
            <p>Настоящее время стоматология
                шагнула далеко вперёд. Стала
                возможной имплантация зубов
                восстановление даже сильно
                разрушенного зуба, появились
                качественные<a href="">Подробнее</a></p>
            <span>2.07.2015</span>
        </div>

        <div class="single-news col-md-3 col-sm-6">
            <p><img src="/stomzn48.ru/img/news2.png"></p>
            <a href="">Россия познакомилась со стоматологией благодаря Петру I, который впервые</a>
            <p>Настоящее время стоматология
                шагнула далеко вперёд. Стала
                возможной имплантация зубов
                восстановление даже сильно
                разрушенного зуба, появились
                качественные<a href="">Подробнее</a></p>
            <span>2.07.2015</span>
        </div>

        <div class="single-news col-md-3 col-sm-6">
            <p><img src="/stomzn48.ru/img/news3.png"></p>
            <a href="">Россия познакомилась со стоматологией благодаря Петру I, который впервые</a>
            <p>Настоящее время стоматология
                шагнула далеко вперёд. Стала
                возможной имплантация зубов
                восстановление даже сильно
                разрушенного зуба, появились
                качественные<a href="">Подробнее</a></p>
            <span>2.07.2015</span>
        </div>

        <div class="single-news col-md-3 col-sm-6">
            <p><img src="/stomzn48.ru/img/news4.png"></p>
            <a href="">Россия познакомилась со стоматологией благодаря Петру I, который впервые</a>
            <p>Настоящее время стоматология
                шагнула далеко вперёд. Стала
                возможной имплантация зубов
                восстановление даже сильно
                разрушенного зуба, появились
                качественные<a href="">Подробнее</a></p>
            <span>2.07.2015</span>
        </div>
        <div class="all-news col-md-12"><a href="">Все новости</a></div>
    </div>

    <div class="container">
        <div class="heder-h2 col-md-12"><hr><h2>НАШИ ЛИЦЕНЗИИ</h2></div>
        <div class="license-slider multiple-items">
            <div class="license-slide"><img src="/stomzn48.ru/img/licenze.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
            <div class="license-slide"><img src="/stomzn48.ru/img/licenze.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
            <div class="license-slide"><img src="/stomzn48.ru/img/licenze.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
            <div class="license-slide"><img src="/stomzn48.ru/img/licenze.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.multiple-items').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow:'<button type="button" class="slick-prev license-prev"></button>',
                    nextArrow:'<button type="button" class="slick-next license-next"></button>',
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
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
            });

        </script>
        <div class="all-license"></div>
    </div>

    <div class="container">
        <div class="heder-h2 col-md-12"><hr><h2>ОТЗЫВЫ О НАС</h2></div>
        <div class="single-review bl-r col-md-12">
            <div class="review-img col-md-2">
                <img src="/stomzn48.ru/img/review1.png">
            </div>
            <div class="review-text col-md-10">
                <h5>Степанова Ольга Валерьевна  <span>Топ менеджер компании «Джетротал Лимитед»</span></h5>
                <p>Россия познакомилась со стоматологией благодаря Петру I, который впервые привёз из-за границы
                    различные приспособления для лечения зубов. Первая школа, которая занималась подготовкой зубных
                    врачей, открылась в 1881 г. в Санкт-Петербурге и уже к 1883 году из школы было выпущено более 450
                    дантистов. В начале XX века уже было собрано много знаний в этой области и выпущено много научных
                    работ. Стали использоваться более современные инструменты для лечения зубов<a href="">Подробнее</a></p>
            </div>
        </div>
        <div class="single-review gr-r col-md-12">
            <div class="review-img col-md-2">
                <img src="/stomzn48.ru/img/review2.png">
            </div>
            <div class="review-text col-md-10">
                <h5>Степанова Ольга Валерьевна  <span>Топ менеджер компании «Джетротал Лимитед»</span></h5>
                <p>Россия познакомилась со стоматологией благодаря Петру I, который впервые привёз из-за границы
                    различные приспособления для лечения зубов. Первая школа, которая занималась подготовкой зубных
                    врачей, открылась в 1881 г. в Санкт-Петербурге и уже к 1883 году из школы было выпущено более 450
                    дантистов. В начале XX века уже было собрано много знаний в этой области и выпущено много научных
                    работ. Стали использоваться более современные инструменты для лечения зубов<a href="">Подробнее</a></p>
            </div>
        </div>
        <div class="single-review bl-r col-md-12">
            <div class="review-img col-md-2">
                <img src="/stomzn48.ru/img/review3.png">
            </div>
            <div class="review-text col-md-10">
                <h5>Степанова Ольга Валерьевна  <span>Топ менеджер компании «Джетротал Лимитед»</span></h5>
                <p>Россия познакомилась со стоматологией благодаря Петру I, который впервые привёз из-за границы
                    различные приспособления для лечения зубов. Первая школа, которая занималась подготовкой зубных
                    врачей, открылась в 1881 г. в Санкт-Петербурге и уже к 1883 году из школы было выпущено более 450
                    дантистов. В начале XX века уже было собрано много знаний в этой области и выпущено много научных
                    работ. Стали использоваться более современные инструменты для лечения зубов<a href="">Подробнее</a></p>
            </div>
        </div>
        <div class="single-review gr-r col-md-12">
            <div class="review-img col-md-2">
                <img src="/stomzn48.ru/img/review4.png">
            </div>
            <div class="review-text col-md-10">
                <h5>Степанова Ольга Валерьевна  <span>Топ менеджер компании «Джетротал Лимитед»</span></h5>
                <p>Россия познакомилась со стоматологией благодаря Петру I, который впервые привёз из-за границы
                    различные приспособления для лечения зубов. Первая школа, которая занималась подготовкой зубных
                    врачей, открылась в 1881 г. в Санкт-Петербурге и уже к 1883 году из школы было выпущено более 450
                    дантистов. В начале XX века уже было собрано много знаний в этой области и выпущено много научных
                    работ. Стали использоваться более современные инструменты для лечения зубов<a href="">Подробнее</a></p>
            </div>
        </div>
        <div class="all-reviews"><a href="">Все отзывы</a></div>
    </div>
    <div class="container">
        <div class="heder-h2 col-md-12"><hr><h2>САЙТЫ ГРУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</h2></div>
        <div class="slider-sites responsive">
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn1.png"></div>
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn2.png"></div>
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn3.png"></div>
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn4.png"></div>
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn5.png"></div>
            <div class="sites-slide"><img src="/stomzn48.ru/img/zn-blank.png"></div>
        </div>
        <script type="text/javascript">
            $('.responsive').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow:'<button type="button" class="slick-prev sites-prev"></button>',
                nextArrow:'<button type="button" class="slick-next sites-next"></button>'
            });
        </script>
    </div>
@endsection