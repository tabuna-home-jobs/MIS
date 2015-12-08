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
    <div class="form-appointment">
    <div class="container">
        <div class="head-category "><span>Записаться на прием</span></div>
        <div class="row">

        <div class="form-image col-md-6"><img src="/mother-baby.ru/img/img-form.png"></div>
        <div class="form-itself col-md-6">
            <form class="__Appointment">
                <input v-model="csrf" type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--<pre>
                    @{{ isActive[0] }}
                    @{{$data | json}}
                </pre>-->
                <div  v-bind:class="{'Active':isActive[0]}" class="__Appointment__step">
                    <div class="__BlockSelect">
                        <select v-model="place" v-on:change="requestSpec('spec')" class="__BlockSelect__select" name="">
                            <option selected disabled>Выберите место</option>
                            @foreach($place as $placeItem)
                                <option value="{{$placeItem->subdivision}}">{{$placeItem->subdivision}}</option>
                            @endforeach
                        </select>
                        <a class="__BlockSelect__a" ><i class="fa fa-angle-down"></i></a>
                    </div>
                    <div class="__BlockSelect">
                        <select v-model="spec" class="__BlockSelect__select" name="" v-on:change="requestSpec('fio')">
                            <option selected disabled>Выберите специализацию</option>
                            <option v-for="item in items.spec">

                                @{{ item }}
                            </option>
                        </select>
                        <a class="__BlockSelect__a" ><i class="fa fa-angle-down"></i></a>
                    </div>
                    <div class="__BlockSelect">
                        <select class="__BlockSelect__select" name="" v-on:change="requestSpec('date')"  v-model="fio">
                            <option selected disabled>Выберите специалиста</option>
                            <option v-for="item in items.fio">
                                @{{ item }}
                            </option>
                        </select>
                        <a class="__BlockSelect__a" ><i class="fa fa-angle-down"></i></a>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"></textarea>
                    </div>


                    <div class="button-form">
                        <button type="button" v-on:click="next(1)">ДАЛЕЕ</button>
                        <div><a href="">очистить</a><img src="/mother-baby.ru/img/erase.png"></div>
                    </div>
                </div>
                <div v-bind:class="{'Active':isActive[1]}" class="__Appointment__step">
                    ДАТА и ВРЕМЯ
                    <div class="__BlockSelect">
                    <select class="__BlockSelect__select" name="">
                        <option v-for="item in items.dateView">
                            @{{ item }}
                        </option>
                    </select>
                        <a class="__BlockSelect__a" ><i class="fa fa-angle-down"></i></a>
                        </div>
                    <div class="button-form">
                        <button type="button" v-on:click="next(2)">ДАЛЕЕ</button>
                        <div><a href="">очистить</a><img src="/mother-baby.ru/img/erase.png"></div>
                    </div>
                </div>
                <div v-bind:class="{'Active':isActive[2]}" class="__Appointment__step">
                    <div class="form-group">
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text">
                    </div>
                    <div class="button-form">
                        <button type="button">ОТПРАВИТЬ</button>
                        <div><a href="">очистить</a><img src="/mother-baby.ru/img/erase.png"></div>
                    </div>
                </div>

            </form>
        </div>
        <div class="indicators-form col-md-12">
            <button v-bind:class="{'active':isActive[0]}"  v-on:click="changeActive(0)"></button>
            <button v-bind:class="{'active':isActive[1]}" v-on:click="changeActive(1)"></button>
            <button v-bind:class="{'active':isActive[2]}" v-on:click="changeActive(2)"></button>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a v-on:click="changeActive(0)"><img src="/mother-baby.ru/img/icon-doctor.png"><img
                        src="/mother-baby.ru/img/arrow-active.png"></a>

            <p>Выберите специализацию, услугу, врача</p>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a v-on:click="changeActive(1)"><img src="/mother-baby.ru/img/icon-time.png"><img src="/mother-baby.ru/img/arrow.png"></a>

            <p>Выберите удобную для Вас дату и время</p>
        </div>
        <div class="arrow col-md-4 col-sm-4 hidden-xs">
            <a v-on:click="changeActive(2)"><img src="/mother-baby.ru/img/icon-contact.png"><img src="/mother-baby.ru/img/arrow.png"></a>

            <p>Заполните Ваши контактные данные</p>
        </div></div>
    </div>
    </div>
    <!--end of appointment-->
    <div class="container">
        <div class="department col-md-4">
            <div class="department-head">Отделения центра</div>
            <div class="department-body">
                <ul class="main-category">
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

            </div>
            <div class="department-footer">
                <img src="/mother-baby.ru/img/arrow-department.png">
            </div>
            <div class="doctor-department">
                <img src="/mother-baby.ru/img/doctor.png">
            </div>
        </div>
        <div class="discounts col-md-8">
            <div class="head-category"><span>Скидки и акции</span></div>

            @foreach(sharesOnMain::getShare(11,5) as $item)
            <div class="discount col-md-12">
                <div class="discounts-img col-md-3"><img src="/mother-baby.ru/img/sa1.png"></div>
                <div class="discounts-info col-md-9">
                    <a href="">Накопительная скидка при сумме 15 000 р. - 3%</a>
                    <p>{!! str_limit($item['content'],300,'...') !!} <a href="shares/{{$item['id']}}">Подробнее.</a></p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- специалисты-->
    <div class="specialists">
        <div class="container">
            <div class="head-spec col-md-12"><span>Приветствуем специалиста</span><a href="/team">Все специалисты</a></div>

            @foreach(SpecialOnMain::getSpec(11) as $item)
            <div class="spec col-md-2">
                <div class="spec-img"><img src="{{$item['avatar']}}"></div>
                <div class="spec-info">
                    <p>{{$item['fio']}}</p>
                    <span>{{$item['opyt']}}</span>
                    <span>Специализация: <a href="">{{$item['special']}}</a></span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- конец поля специалисты-->
    <!-- информационное поле -->
    <div class="info-field">
        <div class="container">

            @foreach(CustomPage::getPage(11,48) as $item)
            <div class="info-column col-md-4">
                <div class="head-info-column">{{$item['name']}}</div>
                <div class="img-info-column"><img src="/mother-baby.ru/img/carera.png"></div>
                <div class="text-info-column">
                    <p>
                       {!! str_limit($item['descript'],200,'...') !!}
                    </p>
                    <a href="/page/{{$item['id']}}">Подробнее</a>
                </div>
            </div>
            @endforeach
                @foreach(CustomPage::getPage(11,49) as $item)
                    <div class="info-column col-md-4">
                        <div class="head-info-column">{{$item['name']}}</div>
                        <div class="img-info-column"><img src="/mother-baby.ru/img/statyi.png"></div>
                        <div class="text-info-column">
                            <p>
                                {!! str_limit($item['descript'],200,'...') !!}
                            </p>
                            <a href="/page/{{$item['id']}}">Подробнее</a>
                        </div>
                    </div>
                @endforeach
                @foreach(CustomPage::getPage(11,50) as $item)
                    <div class="info-column col-md-4">
                        <div class="head-info-column">{{$item['name']}}</div>
                        <div class="img-info-column"><img src="/mother-baby.ru/img/pamyatka.png"></div>
                        <div class="text-info-column">
                            <p>
                                {!! str_limit($item['descript'],200,'...') !!}
                            </p>
                            <a href="/page/{{$item['id']}}">Подробнее</a>
                        </div>
                    </div>
                @endforeach


        </div>
    </div>
    <!-- конец поля информационное поле -->
    <!-- комплексные программы -->
    <div class="complex">
        <div class="container">
            <div class="head-category"><span>Комплексные программы</span></div>

            @foreach(CustomPage::getPage(11,51) as $item)
            <div class="complex-column col-md-4">
                <div class="head-complex-column">{{$item['name']}}</div>
                <div class="img-complex-column"><img src="/mother-baby.ru/img/1god.png"></div>
                <div class="text-complex-column">
                    <p>
                        {{str_limit($item['descript'],300,'...')}}<a href="/page/{{$item['id']}}">Подробнее</a>
                    </p>
                </div>
            </div>
            @endforeach
            @foreach(CustomPage::getPage(11,52) as $item)
                <div class="complex-column col-md-4">
                    <div class="head-complex-column">{{$item['name']}}</div>
                    <div class="img-complex-column"><img src="/mother-baby.ru/img/detsad.png"></div>
                    <div class="text-complex-column">
                        <p>
                            {{str_limit($item['descript'],300,'...')}}<a href="/page/{{$item['id']}}">Подробнее</a>
                        </p>
                    </div>
                </div>
            @endforeach
            @foreach(CustomPage::getPage(11,53) as $item)
                <div class="complex-column col-md-4">
                    <div class="head-complex-column">{{$item['name']}}</div>
                    <div class="img-complex-column"><img src="/mother-baby.ru/img/school.png"></div>
                    <div class="text-complex-column">
                        <p>
                            {{str_limit($item['descript'],300,'...')}} <a href="/page/{{$item['id']}}">Подробнее</a>
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- конец поля комплексные программы-->
    <!-- АЛЬБОМ -->
    <div class="gallery">
        <div class="container">
            <div class="head-category-blank"><span>Наша галерея</span><a href="">Смотреть все</a></div>
        </div>
        <div class="album">
            <div class="row">
                <div class="col-md-3"><img src="/mother-baby.ru/img/g1.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/gallery.png" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g2.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g3.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g4.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g5.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g6.jpg" ></div>
                <div class="col-md-3"><img src="/mother-baby.ru/img/g7.jpg" ></div>
            </div>
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

        </div>
    </div>
    <!-- конец слайдера лицензий -->
    <!-- поле новостей -->
    <div class="news">
        <div class="container">
            <div class="head-category-blank"><span>Новости компании</span><a href="/blog">Все новости</a></div>

            @foreach(newsOnMain::getNews(11,3) as $item)
            <div class="news-column col-md-4">
                <div class="img-news-column col-md-4"><img src="{{$item['avatar']}}"></div>
                <div class="text-news-column col-md-8">
                    <a href="/blog/{{$item['id']}}">
                        {{$item['created_at']}}   {{$item['name']}}</a>
                    <p>{!! str_limit($item['content'],150,'..') !!}<a href="/blog/{{$item['id']}}">Подробнее</a></p>
                </div>
            </div>
            @endforeach

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
