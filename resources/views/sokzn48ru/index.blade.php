@extends('sokzn48ru/header')
@section('content')
<!-- MAINFIELD -->
<div class="mainfield">
    <!-- ADVANTAGES -->
    <div class="advantages">
        <div class="container">
            <div class="row">
                <div class="advantages-head col-md-12"><h3><p>НАШИ</p><span>ПРЕИМУЩЕСТВА</span></h3></div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage1.png"></p>
                    <p>Высокое качество услуг</p>
                </div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage2.png"></p>
                    <p>Высокий сервис</p>
                </div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage3.png"></p>
                    <p>Профессиональность и высококлассность специалистов</p>
                </div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage4.png"></p>
                    <p>Реальные цены</p>
                </div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage5.png"></p>
                    <p>Большой перечень услуг в одном месте</p>
                </div>
                <div class="advantages-single anim-block1 animated col-md-2 col-sm-4">
                    <p><img src="/sokzn48.ru/img/advantage6.png"></p>
                    <p>Ориентация на клиентов всех возрастов</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END ADVANTAGES -->

    <!-- тест -->
    <div class="application_main">


        <div class="container">
            <h2>ОСТАВИТЬ ЗАЯВКУ ON-LINE</h2>

            <div class="row">

                <div class="col-md-4">

                    <div class="application_img">

                        <img src="/sokzn48.ru/img/request-img.png">

                    </div>

                </div>

                <div class="col-md-8">

                    <!-- Tab panes -->
                    <form action="">
                        <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            <option>Выберите специализацию</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            <option>Выберите услугу</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            <option>Выберите специалиста</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleInputEmail1" rows="8">Подробнее</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ДАЛЕЕ</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <a href="#messages" aria-controls="profile" role="tab" data-toggle="tab">ДАЛЕЕ</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ФИО</label>
                                        <input type="text" class="form-control" id="exampleInputFIO" placeholder="ФИО">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Телефон</label>
                                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Телефон">
                                    </div>
                                    <div class="form-group">
                                        <button>ОТПРАВИТЬ</button>
                                    </div>
                                </div>
                        </div>
                    </form>

                </div>






            </div>
            <div class="row">
                <!-- Nav tabs -->
                <ul class="step-control col-md-7 col-md-push-3" role="tablist">
                    <li role="presentation" class="active col-md-4">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            <img src="/sokzn48.ru/img/1step.png">
                            <p><strong>1-Й ШАГ</strong></p>
                        </a>
                        <p>
                            Выберите специализацию,
                            услугу и специалиста
                        </p>
                    </li>
                    <li role="presentation" class="col-md-4">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            <img src="/sokzn48.ru/img/2step.png">
                            <p><strong>2-Й ШАГ</strong></p>
                        </a>
                        <p>
                            Выберите специализацию,
                            услугу и специалиста
                        </p>
                    </li>
                    <li role="presentation" class="col-md-4">
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                            <img src="/sokzn48.ru/img/3step.png">
                            <p><strong>3-Й ШАГ</strong></p>
                        </a>
                        <p>
                            Выберите специализацию,
                            услугу и специалиста
                        </p>
                    </li>
                </ul>
            </div>


        </div>
    </div>
    <!-- тест -->



    <!-- ОСНОВНЫЕ НАПРАВЛЕНИЯ ЦЕНТРА -->
    <div class="directions">
        <div class="container">
            <div class="row">
                <div class="green-head"><h3>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЦЕНТРА</h3></div>



                @foreach(GoodsMain::getGoods(9,50,4) as $item)
                <div class="single-direction anim-block2 animated col-md-3 col-sm-6">
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
                <div class="gallery-img anim-block3 animaded col-md-3 col-sm-6 col-xs-6">
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
                        @foreach(reviewsOnMain::getReview(9,4) as $item)
                        <div class="single-review col-md-12">
                            <div class="review-img col-md-3">
                                <i class="feature-icon fa fa-commenting"></i>
                            </div>
                            <div class="review-text col-md-9">
                                <h5>{{$item['fio']}}</h5>
                                <p>{!! str_limit($item['content'],300,'...') !!}<a href="">Подробнее</a></p>
                                <span>{{$item['created_at']}}</span>
                            </div>
                        </div>
                        @endforeach
                        <div class="all-reviews">
                            <a href="/reviews">Все отзывы</a>
                        </div>
                    </div>
                </div>
                <div class="questions col-md-6">
                    <div class="green-head"><h3>ВОПРОСЫ-ОТВЕТЫ</h3></div>
                    <div class="questions-body">
                        @foreach(qaMain::getQA(9,2) as $item)
                        <div class="single-question col-md-12">
                            <h5>{{$item['fio']}}</h5>
                            <p>{{$item['questions']}}</p>
                            <span>{{$item['created_at']}}</span>
                        </div>
                        <div class="single-answer col-md-12">
                            <div class="answer-img col-md-3">
                                <img src="/sokzn48.ru/img/questions1.png">
                            </div>
                            <div class="answer-text col-md-9">
                                <h5>Ответ специалиста центра</h5>
                                <p><span>Сертифицированный специалист центра</span></p>
                                <p>{{$item['answer']}}</p>
                            </div>
                        </div>
                        @endforeach
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
<script type="text/javascript">
    $('.anim-block1').last().on('scrollSpy:enter', function() {
        if(!$('.anim-block1').hasClass('flipInY')){
            var i = 0;
                                    $('.anim-block1').each(function(){
                                        var that = $(this);
                                        setTimeout(function(){
                                        that.css('opacity',1).addClass('flipInY animated');
                                        },i+=100); 
                                    });
        }                             
    });
    $('.anim-block1').last().on('scrollSpy:exit', function() {
        $('.anim-block1').removeClass('flipInY').css('opacity',0);
    });
    $('.anim-block1').scrollSpy();
</script>
<script type="text/javascript">
    $('.anim-block2').last().on('scrollSpy:enter', function() {
        if(!$('.anim-block2').hasClass('flipInX')){
            var i = 0;
                                    $('.anim-block2').each(function(){
                                        var that = $(this);
                                        setTimeout(function(){
                                        that.css('opacity',1).addClass('flipInX animated');
                                        },i+=100); 
                                    });
        }                             
    });
    $('.anim-block2').last().on('scrollSpy:exit', function() {
        $('.anim-block2').removeClass('flipInX').css('opacity',0);
    });
    $('.anim-block2').scrollSpy();
</script>
<script type="text/javascript">
    $('.anim-block3').last().on('scrollSpy:enter', function() {
        if(!$('.anim-block3').hasClass('fadeInRight')){
            var i = 0;
                                    $('.anim-block3').each(function(){
                                        var that = $(this);
                                        setTimeout(function(){
                                        that.css('opacity',1).addClass('fadeInRight animated');
                                        },i+=100); 
                                    });
        }                             
    });
    $('.anim-block3').last().on('scrollSpy:exit', function() {
        $('.anim-block3').removeClass('fadeInRight').css('opacity',0);
    });
    $('.anim-block3').scrollSpy();
</script>
<!-- END MAINFIELD -->
@endsection