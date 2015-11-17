@extends('mother-babyru/header')
@section('content')
<!--основное поле-->
<div class="mainfield">
    <div class="slider">
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
                    <img src="/mother-baby.ru/img/slider.png" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/mother-baby.ru/img/slider.png" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/mother-baby.ru/img/slider.png" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <!-- Controls -->
        </div>
    </div>
    <!--appointment-->
    <div class="form-appointment container">
        <div class="head-category col-md-12"><span>Записаться на прием</span></div>
        <div class="form-image col-md-6"><img src="/mother-baby.ru/img/img-form.png"></div>
        <div class="form-itself col-md-6">
            <form>
                <select></select>
                <select></select>
                <select></select>
                <textarea></textarea>
                <div class="button-form">
                    <button>ДАЛЕЕ</button> <div><a href="">очистить</a><img src="/mother-baby.ru/img/erase.png"></div>
                </div>
            </form>
        </div>
        <div class="indicators-form col-md-12">
            <button></button>
            <button></button>
            <button></button>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a href=""><img src="/mother-baby.ru/img/icon-doctor.png"><img src="/mother-baby.ru/img/arrow-active.png"></a>
            <p>Выберите специализацию, услугу, врача</p>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a href=""><img src="/mother-baby.ru/img/icon-time.png"><img src="/mother-baby.ru/img/arrow.png"></a>
            <p>Выберите удобную для Вас дату и время</p>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a href=""><img src="/mother-baby.ru/img/icon-contact.png"><img src="/mother-baby.ru/img/arrow.png"></a>
            <p>Заполните Ваши контактные данные</p>
        </div>
    </div>
    <!--end of appointment-->
    <div class="container">
        <div class="department col-md-4">
            <div class="department-head">Отделения центра</div>
            <div class="department-body">
                <ul>
               <!-- <a href="">Аллергология-иммунология</a><br>
                <a href="">Гастроэнтерология</a><br>
                <a href="">Гинекология</a><br>
                <a href="">Кардиология</a><br>
                <a href="">Массаж</a><br>
                <a href="">Неврология</a><br>
                <a href="">Нефрология</a><br>
                <a href="">Ортопедия</a><br>
                <a href="">Оториноларингология (ЛОР)</a><br>
                <a href="">Офтальмология (окулист)</a><br>
                <a href="">Педиатрия</a><br>
                <a href="">Пульманология</a><br>
                <a href="">Травм-ортопедия</a><br>
                <a href="">Онкология</a><br>
                <a href="">Урология</a><br>
                <a href="">Физиотерапия</a><br>
                <a href="">Фуекциональная диагностика</a><br>
                <a href="">Хирургия</a><br>
                <a href="">Эндокринология</a><br>-->

                    @foreach(catOnMain::getCats(11,99)->toTree() as $category)
                        @include('mother-babyru.category.category', $category)
                    @endforeach
                </ul>
                <style>

                </style>
            </div>
            <div class="department-footer">
                <img src="/mother-baby.ru/img/arrow-department.png">
            </div>
            <div class="doctor-department">
                <img src="/mother-baby.ru/img/doctor.png">
            </div>
        </div>
        <div class="discounts col-md-8">
            <div class="head-category col-md-12"><span>Скидки и акции</span></div>
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>В Центре «Здоровье нации» работают врачи первой высшей квалификационной категории
                        соискатели научной степени, кандидаты медицинских наук, заслуженный врач Российской
                        Федерации. Наши клиенты – успешные, активные люди, которые ценят своё время и
                        предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство,
                        комфорт, престиж <a href="">Подробнее.</a></p>
                </div>
            </div>
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>В Центре «Здоровье нации» работают врачи первой высшей квалификационной категории
                        соискатели научной степени, кандидаты медицинских наук, заслуженный врач Российской
                        Федерации. Наши клиенты – успешные, активные люди, которые ценят своё время и
                        предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство,
                        комфорт, престиж <a href="">Подробнее.</a></p>
                </div>
            </div>
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>В Центре «Здоровье нации» работают врачи первой высшей квалификационной категории
                        соискатели научной степени, кандидаты медицинских наук, заслуженный врач Российской
                        Федерации. Наши клиенты – успешные, активные люди, которые ценят своё время и
                        предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство,
                        комфорт, престиж <a href="">Подробнее.</a></p>
                </div>
            </div>
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>В Центре «Здоровье нации» работают врачи первой высшей квалификационной категории
                        соискатели научной степени, кандидаты медицинских наук, заслуженный врач Российской
                        Федерации. Наши клиенты – успешные, активные люди, которые ценят своё время и
                        предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство,
                        комфорт, престиж <a href="">Подробнее.</a></p>
                </div>
            </div>
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>В Центре «Здоровье нации» работают врачи первой высшей квалификационной категории
                        соискатели научной степени, кандидаты медицинских наук, заслуженный врач Российской
                        Федерации. Наши клиенты – успешные, активные люди, которые ценят своё время и
                        предпочитают качественные медицинские услуги, высокий уровень сервиса, удобство,
                        комфорт, престиж <a href="">Подробнее.</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- специалисты-->
    <div class="specialists">
        <div class="container">
            <div class="head-spec col-md-12"><span>Приветствуем специалиста</span><a href="">Все специалисты</a></div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person1.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person2.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person3.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person4.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person5.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
            <div class="spec col-md-2">
                <div class="spec-img"><img src="/mother-baby.ru/img/person1.png"></div>
                <div class="spec-info">
                    <p>Глубшева Наталья Александровна</p>
                    <span>Врач-травматолог-ортопед</span>
                    <span>Специализация: <a href="">травматология и ортопедия</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- конец поля специалисты-->
    <!-- информационное поле -->
    <div class="info-field">
        <div class="container">
            <div class="info-column col-md-4">
                <div class="head-info-column">Карьера в компании</div>
                <div class="img-info-column"><img src="/mother-baby.ru/img/carera.png"></div>
                <div class="text-info-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж.   <a href="">Подробнее</a>
                    </p>
                </div>
            </div>
            <div class="info-column col-md-4">
                <div class="head-info-column">Полезные статьи</div>
                <div class="img-info-column"><img src="/mother-baby.ru/img/statyi.png"></div>
                <div class="text-info-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж.   <a href="">Подробнее</a>
                    </p>
                </div>
            </div>
            <div class="info-column col-md-4">
                <div class="head-info-column">Памятка клиенту</div>
                <div class="img-info-column"><img src="/mother-baby.ru/img/pamyatka.png"></div>
                <div class="text-info-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж.   <a href="">Подробнее</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- конец поля информационное поле -->
    <!-- комплексные программы -->
    <div class="complex">
        <div class="container">
            <div class="head-category col-md-12"><span>Комплексные программы</span></div>
            <div class="complex-column col-md-4">
                <div class="head-complex-column">Первый год жизни</div>
                <div class="img-complex-column"><img src="/mother-baby.ru/img/1god.png"></div>
                <div class="text-complex-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж. <a href="">Подробнее</a>
                    </p>
                </div>
            </div>
            <div class="complex-column col-md-4">
                <div class="head-complex-column">Идем в детский сад</div>
                <div class="img-complex-column"><img src="/mother-baby.ru/img/detsad.png"></div>
                <div class="text-complex-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж. <a href="">Подробнее</a>
                    </p>
                </div>
            </div>
            <div class="complex-column col-md-4">
                <div class="head-complex-column">Идем в школу</div>
                <div class="img-complex-column"><img src="/mother-baby.ru/img/school.png"></div>
                <div class="text-complex-column">
                    <p>
                        В Центре «Здоровье нации» работают врачи первой
                        высшей квалификационной  категории, соискатели
                        научной степени, кандидаты медицинских наук,
                        заслуженный врач Российской Федерации. Наши
                        клиенты – успешные, активные люди, которые
                        ценят своё время и  предпочитают качественные
                        медицинские услуги, высокий уровень сервиса,
                        удобство, комфорт, престиж. <a href="">Подробнее</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- конец поля комплексные программы-->
    <!-- АЛЬБОМ -->
    <div class="gallery">
        <div class="container">
            <div class="head-category-blank"><span>Наша галерея</span><a href="">Смотреть все</a></div>
        </div>
        <div class="album">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
            <img src="/mother-baby.ru/img/gallery.png" style="width:24.5%;">
        </div>
    </div>
    <!-- конец поля альбом -->
    <!-- слайдер лицензий -->
    <div class="license">
        <div class="container">
            <div class="head-category-blank"><span>Наши лицензии</span><a href="">Все лицензии</a></div>
            <div class="slider-license autoplay">
                <div class="license-slide"><img src="/mother-baby.ru/img/license.png"></div>
                <div class="license-slide"><img src="/mother-baby.ru/img/license2.png"></div>
                <div class="license-slide"><img src="/mother-baby.ru/img/license3.png"></div>
                <div class="license-slide"><img src="/mother-baby.ru/img/licenze3.png"></div>
            </div>
            <script type="text/javascript">
                $('.autoplay').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                            breakpoint: 1006,
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
                                slidesToShow: 1,
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
    </div>
    <!-- конец слайдера лицензий -->
    <!-- поле новостей -->
    <div class="news">
        <div class="container">
            <div class="head-category-blank"><span>Новости компании</span><a href="">Все новости</a></div>
            <div class="news-column col-md-4">
                <div class="img-news-column col-md-4"><img src="/mother-baby.ru/img/news.png"></div>
                <div class="text-news-column col-md-8">
                    <a href="">
                        19.05.2012   Группа Компаний
                        «Здоровье Нации» поздравляет
                        всех медицинских сестер с их
                        профессиональным праздником</a>
                    <p>В Центре «Здоровье нации»
                        работают врачи первой высшей
                        квалификационной  категории,
                        соискатели научной степени,
                        кандидаты медицинских наук,
                        заслуженный врач Российской
                        Федерации  <a href="">Подробнее</a></p>
                </div>
            </div>
            <div class="news-column col-md-4">
                <div class="img-news-column col-md-4"><img src="/mother-baby.ru/img/news.png"></div>
                <div class="text-news-column col-md-8">
                    <a href="">
                        19.05.2012   Группа Компаний
                        «Здоровье Нации» поздравляет
                        всех медицинских сестер с их
                        профессиональным праздником</a>
                    <p>В Центре «Здоровье нации»
                        работают врачи первой высшей
                        квалификационной  категории,
                        соискатели научной степени,
                        кандидаты медицинских наук,
                        заслуженный врач Российской
                        Федерации  <a href="">Подробнее</a></p>
                </div>
            </div>
            <div class="news-column col-md-4">
                <div class="img-news-column col-md-4"><img src="/mother-baby.ru/img/news.png"></div>
                <div class="text-news-column col-md-8">
                    <a href="">
                        19.05.2012   Группа Компаний
                        «Здоровье Нации» поздравляет
                        всех медицинских сестер с их
                        профессиональным праздником</a>
                    <p>В Центре «Здоровье нации»
                        работают врачи первой высшей
                        квалификационной  категории,
                        соискатели научной степени,
                        кандидаты медицинских наук,
                        заслуженный врач Российской
                        Федерации  <a href="">Подробнее</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- конец поля новостей -->
    <!-- слайдер сайтов -->
    <div class="sites-slider">
        <div class="container">
            <div class="head-category-blank"><span>Сайты ГК "Здоровье нации»</span><a href="">Все партнеры</a></div>
            <div class="slider-itself center">
                <div class="site-slide"><img src="/mother-baby.ru/img/zn1.png"></div>
                <div class="site-slide"><img src="/mother-baby.ru/img/zn2.png"></div>
                <div class="site-slide"><img src="/mother-baby.ru/img/zn3.png"></div>
                <div class="site-slide"><img src="/mother-baby.ru/img/zn4.png"></div>
                <div class="site-slide"><img src="/mother-baby.ru/img/zn5.png"></div>
                <div class="site-slide"><img src="/mother-baby.ru/img/zn-blank.png"></div>
            </div>
            <script type="text/javascript">
                $('.center').slick({
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 1006,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                });</script>
        </div>
    </div>
    <!-- конец слайдера сайтов -->
    <!-- карта -->
    <div class="map">
        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=b3BUGY-qTZYKsdLbvYhO-fWnc2OFeCZB&width=100%&height=432&lang=ru_RU&sourceType=constructor"></script>
    </div>
    <!-- конец карты -->
    <div class="container protcpec">
        <h3>Имеются противопоказания, необходима консультация специалистов</h3>
    </div>

</div>
<!--конец основного поля-->
@endsection
