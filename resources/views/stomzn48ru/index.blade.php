@extends('stomzn48ru/header')
@section('content')
    <div class="advantages">
        <div class="container">
            <div class="heder-h2 col-md-12"><hr class="hidden-sm hidden-xs"><h2>ПРЕИМУЩЕСТВА НАШЕЙ КЛИНИКИ</h2></div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-lg-push-1">
                    <div class="item anim-block1 animated">
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
                    <div class="item anim-block1 animated">
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
                    <div class="item anim-block1 animated">
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
                    <div class="item anim-block1 animated">
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
                    <div class="item anim-block1 animated">
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
                        <p style="text-align: justify;">Стоматология &laquo;Здоровье нации&raquo; начала свою деятельность&nbsp; в 2010&nbsp; году и за этот период успешно зарекомендовали себя на рынке стоматологических услуг Липецка как надежная клиника, оказывающая услуги высокого качества.</p>
<p style="text-align: justify;">Стоматология &laquo;Здоровье нации&raquo;&nbsp; является современной стоматологией, оснащенной уникальным современным оборудованием. Препараты и материалы, которые используются для лечения, выпускаются ведущими мировыми производителям медицинской продукции. Все предлагаемые услуги клиники имеют лицензии и сертификаты в соответствии с законодательством.</p>
<p style="text-align: justify;">В клинике предлагается самый широкий спектр стоматологических услуг, оказываемых с применением новейших технологий, материалов, методов обследования и обезболивания. Зубосохраняющие операции являются для нас приоритетными, поэтому такие радикальные меры, как, например, удаление зуба, применяются только в исключительных случаях. Лечение на максимально высоком уровне с акцентом на превосходный эстетический результат, сочувствие к проблеме пациента и качественный сервис &mdash; вот те составляющие, которые определяют политику нашей клиники.</p>
<p style="text-align: justify;">Вы можете записаться на консультацию по любым вопросам и получить профессиональные рекомендации по профилактике стоматологических проблем. В клинике проводится профессиональная диагностика на новейшем оборудовании, позволяющая выявить как уже имеющиеся проблемы, так и заболевания на ранних стадиях. Наши стоматологи-хирурги выполняют безболезненное удаление зубов, а стоматологи-терапевты проводят квалифицированное лечение кариеса и пломбирование самых проблемных зубов, включая лечение и пломбирование корневых каналов.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="heder-h2-white col-md-12"><hr><h2>НАШИ УСЛУГИ</h2></div>

            @foreach(GoodsMain::getGoods(10,46,4) as $item)
            <div class="service anim-block2 col-md-3 col-sm-6">
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



            @foreach(GoodsMain::getGoods(10,95) as $item)
           

            <div class="license-slide"><a class="fancybox" href="{{$item['avatar']}}"><img height="300px" src="{{$item['avatar']}}"></a><p><a>{{$item['name']}}</a></p></div>
             @endforeach
            
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

    </div>
@endsection