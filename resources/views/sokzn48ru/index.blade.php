@extends('sokzn48ru/header')
@section('content')
<!-- MAINFIELD -->
<div class="mainfield">
    <!-- ADVANTAGES -->
    <div class="advantages">
        <div class="container">
            <div class="row">
                <div class="advantages-head col-md-12"><h3><p>НАШИ</p><span>ПРЕИМУЩЕСТВА</span></h3></div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage1.png"></p>
                    <p>Высокое качество услуг</p>
                </div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage2.png"></p>
                    <p>Высокий сервис</p>
                </div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage3.png"></p>
                    <p>Профессиональность и высококлассность специалистов</p>
                </div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage4.png"></p>
                    <p>Реальные цены</p>
                </div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage5.png"></p>
                    <p>Большой перечень услуг в одном месте</p>
                </div>
                <div class="advantages-single col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage6.png"></p>
                    <p>Ориентация на клиентов всех возрастов</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END ADVANTAGES -->
    <!-- REQUEST -->
    <div class="request">
        <div class="container">
            <div class="row">
                <div class="request-head">ОСТАВИТЬ ЗАЯВКУ ON-LINE</div>
                <div class="request-step">
                    <div class="request-img col-md-4 hidden-sm hidden-xs">
                        <img src="/sokzn48.ru/img/request-img.png">
                    </div>
                    <div class="request-form col-md-8 col-sm-12">
                        <form>
                            <select></select>
                            <select></select>
                            <select></select>
                            <textarea></textarea>
                        </form>
                        <div class="button-form">
                            <button>ДАЛЕЕ</button>
                        </div>
                    </div>
                </div>
                <div class="steps col-md-12">
                    <div class="step col-md-4 col-sm-4 hidden-xs">
                        <p><img src="/sokzn48.ru/img/1step.png" class="active-img"></p>
                        <h4>1-й шаг</h4>
                        <p>Выберите специализацию, услугу и специалиста</p>
                    </div>
                    <div class="step col-md-4 col-sm-4 hidden-xs">
                        <p><img src="/sokzn48.ru/img/2step.png"></p>
                        <h4>2-й шаг</h4>
                        <p>Выберите удобные для Вас день и время</p>
                    </div>
                    <div class="step col-md-4 col-sm-4 hidden-xs">
                        <p><img src="/sokzn48.ru/img/3step.png"></p>
                        <h4>3-й шаг</h4>
                        <p>Введите Ваши контактные данные</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END REQUEST -->
    <!-- ОСНОВНЫЕ НАПРАВЛЕНИЯ ЦЕНТРА -->
    <div class="directions">
        <div class="container">
            <div class="row">
                <div class="green-head"><h3>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЦЕНТРА</h3></div>



                @foreach(GoodsMain::getGoods(9,50,4) as $item)
                <div class="single-direction col-md-3 col-sm-6">
                    <div class="direction-img">
                        <img src="{{$item['avatar']}}">
                    </div>
                    <div class="direction-text">
                        <h4><a>ДО РОЖДЕНИЯ</a></h4>
                        {!! $item['text'] !!}
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    <!-- END ОСНОВНЫЕ НАПРАВЛЕНИЯ ЦЕНТРА -->
    <!-- СЕМЕЙНЫЙ ОЗДОРОВИТЕЛЬНЫЙ КОМПЛЕКС «СОК» -->
    <div class="healthy">
        <div class="container">
            <div class="row">
                @foreach(CustomPage::getPage(9,47) as $item)
                <div class="orange-head"><h3>СЕМЕЙНЫЙ ОЗДОРОВИТЕЛЬНЫЙ КОМПЛЕКС «СОК»</h3></div>
                <div class="healthy-video col-md-6">


                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $item['descript'] !!}
                    </div>

                </div>
                <div class="healthy-text col-md-6">
                    {!! $item['content'] !!}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END СЕМЕЙНЫЙ ОЗДОРОВИТЕЛЬНЫЙ КОМПЛЕКС «СОК» -->
    <!-- Видео слайдер -->
    <div class="video-slider">
        <div class="container">
            <div class="slider-video autoplay">

                @foreach(GalleryOnMain::getItem(9,25,10) as $item)
                    <div class="video-slide">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{$item['videourl']}}"></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script type="text/javascript">
            $('.autoplay').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            slidesToShow: 3,
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
        </script>
        <div class="video-slider-icon">
            <img src="/sokzn48.ru/img/tv.png">
        </div>
    </div>
    <!-- END Видео слайдер -->
    <!-- ФОТОГАЛЕРЕЯ -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="green-head"><h3>ФОТОГАЛЕРЕЯ</h3></div>

                @foreach(GalleryOnMain::getItem(9,24,8) as $item)
                <div class="gallery-img col-md-3 col-sm-6 col-xs-6">
                    <img src="{{$item['url']}}">
                </div>
                @endforeach
                <div class="all-photoes col-md-12 col-sm-12 col-xs-12">
                    <div class="all-photoes-link"><a href="">Все фото</a></div>
                    <div class="all-photoes-img">
                        <img src="/sokzn48.ru/img/photo-icon.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ФОТОГАЛЕРЕЯ -->
    <!-- АКЦИИ И НОВИНКИ -->
    <div class="shares">
        <div class="container">
            <div class="row">
                <div class="orange-head"><h3>АКЦИИ И НОВИНКИ</h3></div>


                @foreach(sharesOnMain::getShare(9,4) as $item)
                <div class="single-share col-md-3">
                    <div class="shares-img">
                        <img src="{{$item['avatar']}}">
                    </div>
                    <div class="shares-text">
                        <a href="/shares/{{$item['id']}}">{{$item['name']}}</a>
                        <p>{!! str_limit($item['content'],150,'...') !!}<a href="/shares/{{$item['id']}}">Подробнее</a></p>
                        <span>{{$item['created_at']}}</span>
                    </div>
                </div>
                @endforeach


                <div class="all-shares"><a href="/shares">Все акции</a></div>
            </div>
        </div>
    </div>
    <!-- END АКЦИИ И НОВИНКИ -->
    <!-- НОВОСТИ -->
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="green-head"><h3>НОВОСТИ</h3></div>


                @foreach(newsOnMain::getNews(9,4) as $item)
                <div class="single-news col-md-3">
                    <a href="/blog/{{$item['id']}}">{{$item['name']}}</a>
                    <p>{!! str_limit($item['content'],150,'...') !!}<a href="/blog/{{$item['id']}}">Подробнее</a></p>
                    <span>{{$item['created_at']}}</span>
                </div>
                @endforeach


                <div class="all-news col-md-12"><a href="/blog">Все новости</a></div>
            </div>
        </div>
    </div>
    <!-- END НОВОСТИ -->
    <!-- НАШИ ЛИЦЕНЗИИ -->
    <div class="license">
        <div class="container">
            <div class="row">
                <div class="orange-head"><h3>НАШИ ЛИЦЕНЗИИ</h3></div>
                <div class="license-slider multiple-items">
                    <div class="license-slide"><img src="/sokzn48.ru/img/license1.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
                    <div class="license-slide"><img src="/sokzn48.ru/img/license2.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
                    <div class="license-slide"><img src="/sokzn48.ru/img/license3.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
                    <div class="license-slide"><img src="/sokzn48.ru/img/license3.png"><p><a>Лицензия на осуществление медицинской деятельности</a></p></div>
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
                <div class="all-license"><a href="">Все лицензии</a></div>
            </div>
        </div>
    </div>
    <!-- END НАШИ ЛИЦЕНЗИИ -->
    <!-- ОТЗЫВЫ И ВОПРОСЫ-ОТВЕТЫ -->
    <div class="reviews-questions">
        <div class="container">
            <div class="row">
                <div class="reviews col-md-6">
                    <div class="orange-head"><h3>ОТЗЫВЫ</h3></div>
                    <div class="reviews-body">
                        <div class="single-review col-md-12">
                            <div class="review-img col-md-3">
                                <img src="/sokzn48.ru/img/review1.png">
                            </div>
                            <div class="review-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p>Развитие максимума возможностей
                                    заложено в ребенке до трех лет в период
                                    интенсивного роста мозга. В это время
                                    формируются<a href="">Подробнее</a></p>
                                <span>2.07.2015</span>
                            </div>
                        </div>
                        <div class="single-review col-md-12">
                            <div class="review-img col-md-3">
                                <img src="/sokzn48.ru/img/review1.png">
                            </div>
                            <div class="review-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p>Развитие максимума возможностей
                                    заложено в ребенке до трех лет в период
                                    интенсивного роста мозга. В это время
                                    формируются<a href="">Подробнее</a></p>
                                <span>2.07.2015</span>
                            </div>
                        </div>
                        <div class="single-review col-md-12">
                            <div class="review-img col-md-3">
                                <img src="/sokzn48.ru/img/review1.png">
                            </div>
                            <div class="review-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p>Развитие максимума возможностей
                                    заложено в ребенке до трех лет в период
                                    интенсивного роста мозга. В это время
                                    формируются<a href="">Подробнее</a></p>
                                <span>2.07.2015</span>
                            </div>
                        </div>
                        <div class="single-review col-md-12">
                            <div class="review-img col-md-3">
                                <img src="/sokzn48.ru/img/review1.png">
                            </div>
                            <div class="review-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p>Развитие максимума возможностей
                                    заложено в ребенке до трех лет в период
                                    интенсивного роста мозга. В это время
                                    формируются<a href="">Подробнее</a></p>
                                <span>2.07.2015</span>
                            </div>
                        </div>
                        <div class="all-reviews">
                            <a href="">Все отзывы</a>
                        </div>
                    </div>
                </div>
                <div class="questions col-md-6">
                    <div class="green-head"><h3>ВОПРОСЫ-ОТВЕТЫ</h3></div>
                    <div class="questions-body">
                        <div class="single-question col-md-12">
                            <h5>Нефедова Наталья</h5>
                            <p>Развитие максимума возможностей заложено в ребенке до
                                трех лет в период интенсивного роста мозга. В это время
                                формируются?</p>
                            <span>2.07.2015</span>
                        </div>
                        <div class="single-answer col-md-12">
                            <div class="answer-img col-md-3">
                                <img src="/sokzn48.ru/img/questions1.png">
                            </div>
                            <div class="answer-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p><p><span>Сертифицированный специалист по трайбл и восточному танцу</span></p>
                                Современное общество предъявляет
                                серьезные требования к поколению,
                                побуждая родителей
                                <a href="">Подробнее</a></p>
                            </div>
                        </div>
                        <div class="single-question col-md-12">
                            <h5>Нефедова Наталья</h5>
                            <p>Развитие максимума возможностей заложено в ребенке до
                                трех лет в период интенсивного роста мозга. В это время
                                формируются?</p>
                            <span>2.07.2015</span>
                        </div>
                        <div class="single-answer col-md-12">
                            <div class="answer-img col-md-3">
                                <img src="/sokzn48.ru/img/questions1.png">
                            </div>
                            <div class="answer-text col-md-9">
                                <h5>Иванова Светлана</h5>
                                <p><p><span>Сертифицированный специалист по трайбл и восточному танцу</span></p>
                                Современное общество предъявляет
                                серьезные требования к поколению,
                                побуждая родителей
                                <a href="">Подробнее</a></p>
                            </div>
                        </div>
                        <div class="all-questions"><a href="">Все вопросы</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ОТЗЫВЫ И ВОПРОСЫ-ОТВЕТЫ -->
    <!-- слайдер сайты -->
    <div class="container">
        <div class="slider-companies col-md-12">
            <div class="green-head"><h3>САЙТЫ ГРУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</h3></div>
            <div class="slider-sites responsive">
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn1.png"></div>
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn2.png"></div>
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn3.png"></div>
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn4.png"></div>
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn5.png"></div>
                <div class="sites-slide"><img src="/sokzn48.ru/img/zn-blank.png"></div>
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
    </div>
    <!-- конец слайдер сайты -->
    <div class="map">

    </div>
    <div class="be-careful">
        Имеются противопоказания, необходима консультация специалистов
    </div>
</div>
<!-- END MAINFIELD -->
@endsection