@extends('luchiki48ru/header')
@section('content')
    <script src="/luchiki48.ru/js/index.js"></script>
    <div class="development-studio">
        <div class="container">
            <div class="header-label-big col-md-12">Детский центр развития «Лучики»</div>
            <div class="header-label-small col-md-12">
                Развивающие занятия для детей дошкольного возраста. Если Вы хотите гордиться успехами своего ребёнка, то наша студия для Вас!
            </div>

            <div class="cirleses hidden-xs">

                <?php $i = 1; ?>
                @foreach(GoodsMain::getGoods(7,42,8) as $item)
                    <div class="circle pad-{{$i}}">
                        <img class="img-circle img-thumbnail" src="{{$item['avatar']}}" alt="{{$item['name']}}">
                        <p><a href="/service/{{$item['slug']?$item['slug']:$item['id']}}">{{$item['name']}}</a></p>
                    </div>
                    <?php $i++; ?>
                @endforeach

            </div>


        </div>
    </div>
    <div class="stud">
        <div class="container">
            <div class="header-label-big white col-md-12">Учиться нужно легко и с удовольствием!</div>
            <div class="header-label-small white col-md-12">
                Центр детского развития «Лучики» предлагает занятия для детей от 1 года до 6 лет два раза в неделю в удобное для Вас время
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Индивидуальный подход</span><br>
                    Индивидуальный подход к каждому
                    клиенту нашей студии
                </p>
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Постоянное внимание</span><br>
                    Вы ни когда не будете обделены
                    вниманием со стороны нашего
                    персонала
                </p>
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Качество обслуживания</span><br>
                    Будьте уверены в том, что в нашей студии
                    Вам будет предоставлено только
                    качественное обслуживание
                </p>
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Высокая квалификация</span><br>
                    Все наши преподаватели имеют высокую квалификацию
                </p>
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Комфорт и безопасность</span><br>
                    Абсолютный комфорт и безопасность
                    для детей и родителей
                </p>
            </div>
            <div class="single-st white col-md-4 col-sm-6">
                <div class="col-md-4">
                    <img src="/luchiki48.ru/img/st1.png" class="no_hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                    <img src="/luchiki48.ru/img/imgpsh_fullsize.png" class="hover" alt="ИНДИВИДУАЛЬНЫЙ ПОДХОД">
                </div>
                <p class="col-md-8">
                    <span>Современное оборудование</span><br>
                    Все оборудование студии соответствует требованиям нашего времении
                </p>
            </div>
        </div>
    </div>
    <div class="request">
        <div class="container">
            <div class="header-label-big col-md-12">Оставить заявку on-line</div>
            <div class="header-label-small col-md-12">
                Вы можете быстро и удобно оставить свою заявку где бы вы не были
            </div>
            <div class="request-img col-md-6 hidden-xs"><img src="/luchiki48.ru/img/request.png" alt="ОСТАВИТЬ ЗАЯВКУ ON-LINE"></div>
            <div class="form col-md-6">
                <form action="/feedback" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fio" placeholder="ФИО" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" required placeholder="Текст сообщения"></textarea>
                    </div>
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-primary" value="ОТПРАВИТЬ">
                </form>
            </div>
            {{--Временно скрыли шаги
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
            </div>--}}
        </div>
    </div>
    <div class="news-shares">
        <div class="news-shares-head">
            <span><a href="/blog">Последнии новости</a></span><span><a href="/shares">Наши акции</a></span>
            <p>Новости и акции</p>
        </div>
        <div class="container">
            <div class="news col-md-8 col-sm-12 col-xs-12">

                @foreach($allnews as $item)
                    <div class="single-news col-md-12 col-sm-12">
                        <div class="table-news col-md-11 col-sm-11">
                            <div class="news-img col-md-4 col-sm-4"><img src="{{$item['avatar']}}" alt="{{$item['name']}}"></div>
                            <div class="news-text col-md-8 col-sm-8">
                                <h4><a href="blog/{{$item['id']}}">{{$item['name']}}</a></h4>
                                <span>{{$item['created_at']}}</span>
                                <p>{!! str_limit(strip_tags($item['content']),150,'...') !!}<a href="blog/{{$item['id']}}">Подробнее</a></p>
                            </div>
                        </div>
                        <div class="table-href col-md-1 col-sm-1"><a href="blog/{{$item['id']}}"><img src="/luchiki48.ru/img/news-icon.png" alt="Иконка"></a></div>
                    </div>
                @endforeach

            </div>
            <!-- акции-->
            <div class="shares col-md-4 col-sm-12 col-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach(sharesOnMain::getShare(7,3) as $key=>$item)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-{{$key}}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$key}}" aria-expanded="false"
                                       aria-controls="collapse-{{$key}}">
                                        АКЦИЯ
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{$key}}" class="panel-collapse collapse
                        @if($key == 0)
                                    in
                                @endif
                                    " role="tabpanel" aria-labelledby="heading-{{$key}}">
                                <div class="panel-body">
                                    <div class="share-img"><img src="{{$item['avatar']}}" alt="{{$item['name']}}"></div>
                                    <div class="share-text">
                                        <h4><a href="/shares/{{$item['id']}}">{{$item['name']}}</a></h4>
                                        <span>{{$item['created_at']}}</span>
                                        <p>{!! str_limit(strip_tags($item['content']),150,'...')!!}<a href="/shares/{{$item['id']}}">Подробнее</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END акции-->
        </div>
    </div>
    <div class="studio hidden-xs">
        <div class="container">
            <div class="studio-head-big col-md-12">Детский центр дошкольного развития «Лучики»</div>
            <div class="studio-head-small col-md-12">
                предлагает широкий спектр развивающих и досуговых программ для ребят от 1-го года до 6 лет
            </div>
            <div class="program col-md-7 col-md-push-5 col-sm-12 col-xs-12">
                <div class="program-head">
                    Наша программа включает в себя российские и зарубежные педагогические методики, а
                    также авторские разработки ведущих педагогов студии раннего развития детей «Лучики»
                </div>
                <div class="program-body">
                    <ul>
                        <li>Развивающие занятия для детей от 1 года;</li>
                        <li>Детский психолог;</li>
                        <li>Логопед – дефектолог;</li>
                        <li>Веселый английский;</li>
                        <li>Подготовка к школе;</li>
                        <li>Йога;</li>
                        <li>Организация и проведение детских праздников.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="license container">
        <div class="header-label-big col-md-12">Наши лицензии</div>
        <div class="header-label-small col-md-12">
            Здесь Вы можете ознакомиться с нашими лицензиями и другими документами
        </div>

        @foreach(GoodsMain::getGoods(7,43,4) as $item)
            <div class="single-license col-md-3 col-sm-6">
                <div class="license-img"><a class="fancybox" href="{{$item['avatar']}}"><img src="{{$item['avatar']}}" alt="{{$item['name']}}"></a></div>
                <p><a href="/service/{{$item['id']}}">{{$item['name']}}</a></p>
            </div>
        @endforeach


        <div class="all-license col-md-12"><a href="/service?category=43">Все лицензии</a></div>
    </div>

    <div class="reviews container">
        <div class="header-label-big col-md-12">Отзывы наших клиентов</div>
        <div class="header-label-small col-md-12">
            Здесь Вы можете прочитать то, что пишут о нас наши клиенты и оставить свой отзыв
        </div>


        @foreach(reviewsOnMain::getReview(7,4) as $item)
            <div class="single-review col-md-12">
                <div class="rev-img col-md-2 col-sm-2 hidden-xs"><i class="feature-icon fa fa-commenting"></i></div>
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
    <div class="reviews-form" id="reviews_form">
        <h2 class="blueBg center white feedHead">Оставить отзыв</h2>
        <div class="container">

            <div class="col-sm-6 hidden-xs big textst">
                Здесь Вы можете оставить свой отзыв

            </div>

            <div class="col-sm-offset-2 col-sm-4">

                <form class="form-horizontal" role="form" action="/reviews" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="textinput" name="fio" type="text" max="255" placeholder="Имя" class="form-control input-md">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <textarea class="form-control" id="textarea" name="content" placeholder="Комментарий"></textarea>
                            </div>
                        </div>

                        {{csrf_field()}}

                                <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-12">
                                <button name="singlebutton" type="submit" class="btn btn-primary">ОТПРАВИТЬ</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="container slick-slider-sites">
        <div class="header-label-big col-md-12">Сайты группы компаний «Здоровье нации»</div>
        <div class="slider-sites autoplay">
            <div class="sites-slide">
                <a href="http://mother-baby.ru/" target="_blank">
                    <img src="/luchiki48.ru/img/zn1.png" alt="Цент детского здоровья">
                </a>
            </div>

            <div class="sites-slide">
                <a href="http://zdorovie48.ru/" target="_blank">
                    <img src="/luchiki48.ru/img/zn3.png" alt="Здоровье нации">
                </a>
            </div>
            <div class="sites-slide">
                <a>
                    <img src="/luchiki48.ru/img/zn4.png" alt="Лучики">
                </a>
            </div>
            <div class="sites-slide">
                <a href="http://sokzn48.ru/" target="_blank">
                    <img src="/luchiki48.ru/img/zn5.png" alt="Сок">
                </a>
            </div>
        </div>

    </div>

    <div class="map">

    </div>
@endsection
