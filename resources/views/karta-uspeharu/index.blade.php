@extends('karta-uspeharu/header')
@section('content')
        <!--Основное поле начинается-->
<div class="mainfield container">
    <!-- контент начинается -->
    <div class="content col-md-9">
        <!-- услуги -->
        <div class="services">
            <div class="content-head">Наши услуги</div>
            <div class="service row">

                @foreach(GoodsMain::getGoods(8,45,4) as $item)
                <div class="col-md-12 service-item">
                    <div class="service-img col-md-3">
                        <img src="{{$item['avatar']}}">
                    </div>
                    <div class="service-text col-md-9">
                        <a href="/service/{{$item['id']}}">{{$item['name']}}</a>
                        <p>
                            Фундаментальные отрасли психологии имеют общее значение в изучении психических
                            явлений. Это базис, который объединяет все отрасли психологии, а также служит основой
                            их развития. Фундаментальные отрасли, как правило, называют термином «общая
                            психология». Основными понятиями, которые рассматривает общая психология,
                            являются: познавательные процессы (ощущения, восприятия, внимание, представления,
                            память, воображение, мышление, речь, эмоции, воля), психические свойства
                            (способности, мотивация, темперамент, характер) и психические состояния.
                            Возникновение общей психологии в качестве фундаментальной
                            <a href="">Подробнее</a>
                        </p>
                    </div>
                </div>
                @endforeach

            </div>




        </div>
        <!-- о компании -->
        <div class="about">
            <div class="content-head">О центре «Карта Успеха»</div>
            <p>
                «Давным-давно собрались Боги вместе и решили поразвлечься - спрятать от людей счастье. Да спрятать его так, чтобы
                человек не смог найти. Долго думали над тем, где же его спрятать – и на вершине самой высокой горы, и на дне океана, и на
                другой планете – все подвластно человеку. И тогда один из них предложил спрятать счастье в человеке самом»
                <br>
                Современный человек настолько зависим от социума, что видит счастье в хорошей работе, просторном доме, модных вещах,
                успешной карьере, прочном браке. Он отдает все свои силы для того, чтобы достигнуть одной из этих целей. Но достигнув,
                понимает – что ошибся.
                <br>
                Счастье приходит само, когда человек обретает гармонию с самим собой.
                <br>
                И именно наука психология учит этому – как понимать себя, как научиться себя контролировать, как научиться понимать
                супруга или ребенка, как правильно выбрать цель в жизни, как стать успешным в работе.
                <br>
                Как правильно войти в гармонию со своим телом и со своим внутренним миром, ведь вместе с ней придет и уверенность в
                себе, а за ней успешность в делах.
                <br>
                «Карта Успеха» - Ваш верный путеводитель во вселенной человеческого сознания, поможет обрести гармонию и проложить
                дорогу к Вашему счастью!
            </p>
        </div>
        <!-- новости -->
        <div class="news">
            <div class="content-head">Новости центра</div>
            <div class="news-list">

                @foreach(newsOnMain::getNews(8,3) as $item)
                <div class="single-news row">
                    <div class="news-img col-md-3"><img src="{{$item['avatar']}}"></div>
                    <div class="news-text col-md-9">
                        <span>{{$item['created_at']}}</span><br>
                        <a href="/blog/{{$item['id']}}">{{$item['name']}}</a>
                        <p>
                            {!! str_limit($item['content'],150,'...') !!}
                            <a href="/blog/{{$item['id']}}">Подробнее</a>
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="all-news"><a href="/blog">Все новости</a></div>
        </div>
    </div>
    <!-- контент кончается -->
    <!-- правая колонка начинается -->
    <div class="right-side col-md-3">
        <div class="call">
            <div class="call-header">ЗАКАЗАТЬ ЗВОНОК</div>
            <div class="call-body">
                <form>
                    <input>
                    <input>
                    <input>
                    <textarea></textarea>
                </form>
            </div>
            <div class="call-footer"><button>ЗАКАЗАТЬ</button></div>
        </div>

        <div class="useful">
            <div class="useful-head">Полезная информация</div>
            <div class="useful-body">
                @foreach(ArtsOnMain::getArts(8,6) as $item)
                <p><a href="/art/{{$item['id']}}">{{$item['name']}}</a></p>
                    @endforeach
            </div>
        </div>
        <div class="all-useful"><a href="/art">Все статьи</a></div>
        <div class="review">
            <div class="review-head">Отзывы о нас</div>

            @foreach(reviewsOnMain::getReview(8,4) as $item)
            <div class="single-review">
                <h5>{{$item['fio']}}</h5>
                <span>{{$item['created_at']}}</span>
                <p>{!! str_limit($item['content'],300,'...') !!}</p>
            </div>
            @endforeach

        </div>
        <div class="all-reviews"><a href="/reviews">Все отзывы</a></div>
    </div>
    <!-- правая колонка кончается -->
    <div class="slider-companies col-md-12">
        <div class="content-head">Сайты ГК "Здоровье нации</div>
        <div class="slider-sites autoplay">
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn1.png"></div>
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn2.png"></div>
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn3.png"></div>
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn4.png"></div>
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn5.png"></div>
            <div class="sites-slide"><img src="/karta-uspeha.ru/img/zn-blank.png"></div>
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
        <div class="all-companies"><a href="">Все наши партнеры</a></div>
    </div>
</div>
<!--Основное поле кончается-->
<div class="map container">
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=b3BUGY-qTZYKsdLbvYhO-fWnc2OFeCZB&width=100%&height=432&lang=ru_RU&sourceType=constructor"></script>
</div>
@endsection