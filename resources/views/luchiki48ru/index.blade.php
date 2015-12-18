@extends('luchiki48ru/header')
@section('content')
<div class="development-studio">
    <div class="container">
        <div class="header-label-big col-md-12">СТУДИЯ РАННЕГО РАЗВИТИЯ ДЕТЕЙ «ЛУЧИКИ»</div>
        <div class="header-label-small col-md-12">
            Развивающие занятия. Если Вы  хотите гордиться успехами своего ребёнка, то наша студия для Вас!
        </div>

        <div class="cirleses">

        <?php $i = 1; ?>
        @foreach(GoodsMain::getGoods(7,42,8) as $item)
            <div class="circle pad-{{$i}}"><img src="{{$item['avatar']}}"><p><a href="/service/{{$item['id']}}">{{$item['name']}}</a></p></div>
        <?php $i++; ?>
        @endforeach

        </div>

        <script>
            $(document).ready(function(){
                $('.cirleses .circle:nth-child(4)').addClass('width-4');
                $('.cirleses .circle:nth-child(1),.development-studio .circle:nth-child(6)').addClass('width-1');
                $('.cirleses .circle:nth-child(3),.development-studio .circle:nth-child(8)').addClass('width-3');
                $('.cirleses .circle:nth-child(2),.development-studio .circle:nth-child(5),.development-studio .circle:nth-child(7)').addClass('width-2');
            });
        </script>

    </div>
</div>
<div class="stud">
    <div class="container">
        <div class="header-label-big white col-md-12">УЧИТЬСЯ МОЖНО ЛЕГКО И С УДОВОЛЬСТВИЕМ!</div>
        <div class="header-label-small white col-md-12">
            Студия раннего развития детей «Лучики» предлагает занятия для детей от 1,5 до 6 лет два раза в неделю в удобное для Вас время
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>ИНДИВИДУАЛЬНЫЙ ПОДХОД</span><br>
                Индивидуальный подход к каждому
                клиенту нашего центра
            </p>
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>ПОСТОЯННОЕ ВНИМАНИЕ</span><br>
                Вы ни когда не будете обделены
                вниманием со стороны нашего
                персонала
            </p>
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>КАЧЕСТВО ОБСЛУЖИВАНИЯ</span><br>
                Будьте уверены в том, что в
                нашем центре Вам будет
                предоставлено только
                качественное обслуживание
            </p>
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>ВЫСОКАЯ КВАЛИФИКАЦИЯ</span><br>
                Все наши сотрудники имеют высокую
                квалификацию на уровне лучших
                клиник Европы
            </p>
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>КОМФОРТ И БЕЗОПАСНОСТЬ</span><br>
                Абсолютный комфорт и безопасность
                для детей и родителей
            </p>
        </div>
        <div class="single-st white col-md-4 col-sm-6">
            <img src="/luchiki48.ru/img/st1.png" class="col-md-4">
            <p class="col-md-8">
                <span>СОВРЕМЕННОЕ ОБОРУДОВАНИЕ</span><br>
                Все оборудование центра
                соответствует требованиям
                нашего времени
            </p>
        </div>
    </div>
</div>
<div class="request">
    <div class="container">
        <div class="header-label-big col-md-12">ОСТАВИТЬ ЗАЯВКУ ON-LINE</div>
        <div class="header-label-small col-md-12">
            Вы можете быстро и удобно оставить свою заявку где бы вы не были
        </div>
        <div class="request-img col-md-6"><img src="/luchiki48.ru/img/request.png"></div>
        <div class="form col-md-6">
            <form>
                <select></select>
                <select></select>
                <select></select>
                <textarea></textarea>
                <button>ДАЛЕЕ</button>
            </form>
        </div>
        <div class="steps col-md-12 col-sm-12 hidden-xs">
            <div class="step active-step col-md-4 col-sm-4">
                <img src="/luchiki48.ru/img/step1.png">
                <h4>1-й шаг</h4>
                <p>Выберите специализацию, услугу и специалиста</p>
            </div>
            <div class="step col-md-4 col-sm-4">
                <img src="/luchiki48.ru/img/step1.png">
                <h4>2-й шаг</h4>
                <p>Выберите удобные для Вас день и время</p>
            </div>
            <div class="step col-md-4 col-sm-4">
                <img src="/luchiki48.ru/img/step1.png">
                <h4>3-й шаг</h4>
                <p>Введите Ваши контактные данные</p>
            </div>
        </div>
    </div>
</div>
<div class="news-shares">
    <div class="news-shares-head">
        <span><a href="/blog">ПОСЛЕДНИЕ НОВОСТИ</a></span><span><a href="/shares">НАШИ АКЦИИ</a></span><p>НОВОСТИ И АКЦИИ</p>
    </div>
    <div class="container">
        <div class="news col-md-8 col-sm-12 col-xs-12">

            @foreach(newsOnMain::getNews(7,5) as $item)
            <div class="single-news col-md-12 col-sm-12">
                <div class="table-news col-md-11 col-sm-11">
                    <div class="news-img col-md-4 col-sm-4"><img src="{{$item['avatar']}}"></div>
                    <div class="news-text col-md-8 col-sm-8">
                        <h4><a href="blog/{{$item['id']}}">{{$item['name']}}</a></h4>
                        <span>{{$item['created_at']}}</span>
                        <p>{!! str_limit($item['content'],150,'...') !!}<a href="blog/{{$item['id']}}">Подробнее</a></p>
                    </div>
                </div>
                <div class="table-href col-md-1 col-sm-1"><a href="blog/{{$item['id']}}"><img src="/luchiki48.ru/img/news-icon.png"></a></div>
            </div>
            @endforeach

        </div>
        <!-- акции-->
        <div class="shares col-md-4 col-sm-12 col-xs-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                @foreach(sharesOnMain::getShare(7,3) as $item)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                АКЦИЯ
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="share-img"><img src="{{$item['avatar']}}"></div>
                            <div class="share-text">
                                <h4><a href="/shares/{{$item['id']}}">{{$item['name']}}</a></h4>
                                <span>{{$item['created_at']}}</span>
                                <p>{!! str_limit($item['content'],150,'...') !!}<a href="/shares/{{$item['id']}}">Подробнее</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                    <script>
                        $(document).ready(function(){
                            $('.panel-collapse:nth-child(2)').addClass('in');
                        });
                    </script>

            </div>
        </div>
        <!-- END акции-->
    </div>
</div>
<div class="studio">
    <div class="container">
        <div class="studio-head-big col-md-12">СТУДИЯ РАННЕГО РАЗВИТИЯ ДЕТЕЙ «ЛУЧИКИ»</div>
        <div class="studio-head-small col-md-12">
            предлагает широкий спектр развивающих и досуговых программ для ребят от 1,5 до 6 лет
        </div>
        <div class="program col-md-7 col-md-push-5 col-sm-12 col-xs-12">
            <div class="program-head">
                Наша программа включает в себя российские и зарубежные педагогические методики, а
                также авторские разработки ведущих педагогов студии раннего развития детей «Лучики»
            </div>
            <div class="program-body">
                <ul>
                    <li>Развивающие занятия для детей от 1,5 лет</li>
                    <li>Детский психолог</li>
                    <li>Логопед – дефектолог</li>
                    <li>Веселый английский</li>
                    <li>Подготовка к школе</li>
                    <li>Йога</li>
                    <li>Организация и проведение детских праздников</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="license container">
    <div class="header-label-big col-md-12">НАШИ ЛИЦЕНЗИИ</div>
    <div class="header-label-small col-md-12">
        Здесь Вы можете ознакомиться с нашими лицензиями и другими документами
    </div>

    @foreach(GoodsMain::getGoods(7,43,4) as $item)
        <div class="single-license col-md-3 col-sm-6">
            <div class="license-img"><a class="fancybox" href="{{$item['avatar']}}"><img src="{{$item['avatar']}}"></a></div>
            <p><a href="/service/{{$item['id']}}">{{$item['name']}}</a></p>
        </div>
    @endforeach


    <div class="all-license col-md-12"><a href="/service?category=43">Все лицензии</a></div>
</div>

<div class="reviews container">
    <div class="header-label-big col-md-12">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</div>
    <div class="header-label-small col-md-12">
        Здесь Вы можете прочитать то, что пишут о нас наши клиенты и оставить свой отзыв
    </div>

    <style>
        .single-review>div:nth-child(1) {
            overflow: hidden;
        }
        .single-review i {
            display: block;
            font-size: 4em;
            text-align: center;
        }
    </style>

    @foreach(reviewsOnMain::getReview(7,4) as $item)
    <div class="single-review col-md-12">
        <div class="rev-img col-md-2 col-sm-2"><i class="feature-icon fa fa-commenting"></i></div>
        <div class="rev-text col-md-10 col-sm-10">
            <h4>{{$item['fio']}}</h4>
            <span>{{$item['created_at']}}</span>
            <p>{!! str_limit($item['content'],300,'...') !!}
                </p>
        </div>
    </div>
    @endforeach


    <div class="all-rev"><a href="/reviews">Все отзывы</a></div>
</div>

<div class="container slick-slider-sites">
    <div class="header-label-big col-md-12">САЙТЫ ГРУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</div>
    <div class="slider-sites autoplay">
        <div class="sites-slide"><img src="/luchiki48.ru/img/zn1.png"></div>
        <div class="sites-slide"><img src="/luchiki48.ru/img/zn2.png"></div>
        <div class="sites-slide"><img src="/luchiki48.ru/img/zn3.png"></div>
        <div class="sites-slide"><img src="/luchiki48.ru/img/zn4.png"></div>
        <div class="sites-slide"><img src="/luchiki48.ru/img/zn5.png"></div>
    </div>
    <script type="text/javascript">
        $('.autoplay').slick({
            slidesToShow: 5,
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
</div>

<div class="map">

</div>
@endsection