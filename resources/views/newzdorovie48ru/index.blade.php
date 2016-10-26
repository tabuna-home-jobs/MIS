@extends('newzdorovie48ru/header')

@section('content')

        <!-- Слайдер -->
<section class="hidden-xs hidden-sm">
    {{ Block::make('index_slider', 'newzdorovie48ru/_blocks/index_slider') }}
</section>
<!-- Слайдер -->


@if(!is_null($getShare))
        <!-- Акция -->
<section class="container-fluid hidden-xs hidden-sm">
    <div class="row bg-success">
        <div class="container v-center padder-v">
            <div class="col-md-10 text-white index-share">
                <div class="h3 m-b m-t"><a href="/shares/{{$getShare->id}}">{{$getShare->name}}</a></div>
            </div>
            <div class="col-md-2 v-center text-center">
                <a href="/shares/" class="btn btn-default btn-void-white">Смотреть все</a>
            </div>

        </div>
    </div>
</section>
<!-- Акция -->
@endif

        <!-- Услуги -->
<section class="container-fluid">
    {{ Block::make('index_goods', 'newzdorovie48ru/_blocks/index_goods', 3) }}
</section>
<!-- Услуги -->

<!-- Наши достоинства -->
<section class="container-fluid">
    {{ Block::make('index_dignity', 'newzdorovie48ru/_blocks/index_dignity', 4) }}
</section>
<!-- Наши достоинства -->

<!-- Запись на приём -->
<section class="container-fluid" id="main-appointments-section">

    <div class="row">
        <h1 class="text-center m-t-xxl  m-b-xxl">Запишитесь на приём</h1>

        <div class="container">

            <div class="row">
                <div class="col-md-6 hidden-xs">
                    <figure><img src="/zdorovie48/img/appoint.png" alt="image" title="Appointment image" class="img-responsive"></figure>
                </div>
                <div class="col-md-6 col-xs-12">


                    <div class="appointment-form clearfix">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                                    <p>Шаг 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>

                                    <p>Шаг 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">3</a>

                                    <p>Шаг 3</p>
                                </div>
                            </div>
                        </div>


                        <form role="form" action="appointment/store" method="post">
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label">Специализациия</label>
                                            <select name="specialization" required="required" class="form-control rounded">
                                                <option value="">Выберите специализацию</option>
                                                @foreach($specialization as $spec)
                                                    <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label">Врач</label>
                                            <select disabled="" name="name" required="required" class="form-control rounded">
                                                <option value="">Выберите врача</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label">Место</label>
                                            <select disabled="" name="subdivision" required="required" class="form-control rounded">
                                                <option value="">Выберите место</option>
                                            </select>
                                        </div>

                                        <button class="btn btn-default  nextBtn  btn-void-primary pull-right" type="button">
                                            Далее
                                        </button>

                                        <script>
                                            $('select[name="subdivision"]').change(function () {

                                                var Placevalue = $('select[name="subdivision"] :selected').val();
                                                var NameValue = $('select[name="name"] :selected').val();
                                                var Specialvalue = $('select[name="specialization"] :selected').val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');

                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/time/" + Placevalue + "/" + Specialvalue + "/" + NameValue,
                                                    dataType: 'json',
                                                    beforeSend: function (request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function (msg) {
                                                        var option = "<div id='date-scroll'>";
                                                        var is_empty_option = true;

                                                        $.each(msg, function (dateStr, timeObj) {
                                                            is_empty_option = false;
                                                            option += "<h5><b>" + dateStr + "</b></h5>";

                                                            $.each(timeObj, function (dateStr2, timeObj2) {
                                                                option += "<div class='radio'><label  class='i-checks i-checks-sm'><input type='radio' required='required' name='apport' value='" + this.beginning + "|" + this.end + "'><i></i>  С " + this.Shours + ":" + this.Sminute + " по " + this.Ehours + ":" + this.Eminute + "</label></div>";
                                                            });
                                                        });

                                                        option += '</div>';

                                                        if (is_empty_option) {
                                                            option += "<h2>К данному специалисту нет свободной записи</h2>" +
                                                                    "<div class='radio hidden'><label  class='i-checks i-checks-sm'>" +
                                                                    "<input type='radio' name='apport' value='' required='required' />" +
                                                                    "</label></div>";
                                                        }

                                                        $('#date').html(option);

                                                        if (!is_empty_option) {
                                                            $('#date-scroll').mCustomScrollbar({
                                                                theme: "dark",
                                                                axis: 'y',
                                                                advanced: {updateOnContentResize: true, updateOnSelectorChange: true},
                                                                liveSelector: '#date-scroll',
                                                                live: true,
                                                                setHeight: 250
                                                            });
                                                        }
                                                    },
                                                    error: function () {
                                                        console.log('ошибка');
                                                    }/*,
                                                     complete: function()
                                                     {
                                                     console.log('завершён');
                                                     }*/
                                                });

                                                return false;
                                            });

                                            $('select[name="specialization"]').change(function () {
                                                var obj = $(this);
                                                var Curvalue = $(':selected', this).val();
                                                //var Placevalue = $('select[name="subdivision"] :selected').val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');

                                                $('a[href="#step-2"], a[href="#step-3"]').attr('disabled', true);
                                                $('select[name="subdivision"]').html('<option selected disabled value="">Выберите место</option>');
                                                $('select[name="subdivision"]').attr('disabled', true);

                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/fio/" + Curvalue,
                                                    beforeSend: function (request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function (msg) {

                                                        var option = "<option selected disabled value=''>Выберите врача</option>";
                                                        for (var i = 0; msg.length > i; i++) {
                                                            option += "<option value='" + msg[i].name + "'>"
                                                                    + msg[i].name + "</option>";
                                                        }

                                                        $('select[name="name"]').html(option);
                                                        $('select[name="name"]').attr('disabled', false);

                                                    }
                                                });


                                            });


                                            $('select[name="name"]').change(function () {
                                                var Curvalue = $(':selected', this).val();

                                                var NameValue = $('select[name="name"] :selected').val();
                                                var SpecialValue = $('select[name="specialization"] :selected').val();
                                                var csrf = $('meta[name="csrf-token"]').attr('content');

                                                $('a[href="#step-2"], a[href="#step-3"]').attr('disabled', true);

                                                $.ajax({
                                                    type: "POST",
                                                    url: "/appointment/place/" + SpecialValue + "/" + NameValue,
                                                    beforeSend: function (request) {
                                                        request.setRequestHeader('X-CSRF-Token', csrf);
                                                    },
                                                    success: function (msg) {


                                                        var option = "<option selected disabled value=''>Выберите место</option>";
                                                        for (var i = 0; msg.length > i; i++) {

                                                            option += "<option value='" + msg[i].subdivision + "'>"
                                                                    + msg[i].subdivision + "</option>";
                                                        }

                                                        $('select[name="subdivision"]').html(option);
                                                        $('select[name="subdivision"]').attr('disabled', false);

                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <div class="h5 m-b-sm m-t-sm text-center"><b>Выберите дату</b></div>

                                        <div class="form-group" id="date"></div>

                                        <button class="btn btn-default  nextBtn  btn-void-primary pull-right" type="button">Далее</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <div class="h5 m-b-sm m-t-sm"> Информация</div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <input type="text" name="firstname" max="255" required class="form-control rounded" placeholder="Имя">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="lastname" max="255" required class="form-control rounded" placeholder="Фамилия">
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email адрес" class="form-control rounded" required>
                                            </div>

                                            <div class="col-md-6">
                                                <input name="phone" placeholder="Номер телефона" class="form-control rounded" required type="text"
                                                       data-mask="+ 9-999-999-99-99">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea rows="5" name="comment" class="form-control rounded" placeholder="Комментарий"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <p class="col-md-12">
                                                <button class="btn btn-default  btn-void-primary pull-right" type="submit">Записаться!
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Запись на приём -->


<style>




</style>

{{--
<!-- Комплексные услуги -->
<section class="container-fluid">
    <div class="row">
        <div class="paralax-2 complex-uslug  parallax-main v-center" data-type="background" data-speed="10">
            <div class="container padder-v text-white">
                <h1 class="text-center  m-b-xxl">Комплексные медицинские услуги</h1>
                <div>

                    @foreach ($complexGoods as $key => $item)
                        <div class="col-md-4 @if($key > 0) hidden-xs hidden-sm @endif border_gradient">
                            <h2 class="h3 m-b-md text-center">{{ $item->name }}</h2>


                            <ul class="list-unstyled">
                                @foreach($item->complexGoods as $key=>$complexGood)
                                    <li class="m-b-md">
                                        <a href="/service/complex/{{$complexGood->slug}}" class="text-white row complex-list">
                                            <div class="col-xs-3">
                                        <span class="h3 m-b-xs m-r-md inline b b-white rounded wrapper">
                                            <i class="fa w-1x fa fa-heart"></i>
                                        </span>
                                            </div>
                                            <div class="col-xs-9">
                                                {{ $complexGood->name }}
                                            </div>
                                        </a>
                                    </li>
                                    @if($key == 2)
                                        @break
                                    @endif

                                @endforeach
                            </ul>
                            <div class="text-center  m-t-lg">
                                <a href="/service/complex/{{$complexGood->slug}}" class=" btn btn-default btn-void-white">Все комплексные услуги</a>
                            </div>


                        </div>
                    @endforeach
                    </div>
                    </div>
                </div>
            </div>
</section>
<!-- Комплекстные услуги -->
--}}
<!-- Новости -->
<section class="container-fluid">
    <div class="row  m-b-xxl">
        <h1 class="text-center m-t-xxl  m-b-xxl">Последние новости</h1>

        <div class="container">
            @foreach($getNews as $key => $value)
                <article class="col-md-3">
                    <figure>
                        <a href="/blog/{{$value['id']}}"><img src="{{$value['avatar']}}" alt="" class="img-responsive" alt="{{$value['name']}}"/>
                            <h2 class="h4 m-t m-b">{{$value['name']}}</h2></a>

                        <div class="b-b-success w-50-p line-lg"></div>
                        <figcaption>
                            <time>{{$value['created_at']->toDateString()}}</time>
                        </figcaption>
                    </figure>
                </article>
            @endforeach
        </div>
    </div>
</section>
<!-- Новости -->

<section class="container-fluid">
    <div class="row">

        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=PGr_ZwUruElPyf_7LeDqD9iyrRwoXSyi&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>


    </div>
</section>

<!-- Мобильное приложение -->
<section class="paralax container-fluid hidden-sm hidden-xs" data-stellar-background-ratio="0.3">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="/zdorovie48/img/mobile/mobile-hand.png" class="app-img" alt="" title="">
                </div>
                <div class="col-md-7">
                    <div class="mobile-app-content">
                        <h1 class="padder-v">Карманный доктор</h1>

                        <p class="lead">Попробуйте мобильное приложение "Здоровье Нации" на своём устройстве,
                                        которое позволит
                                        вам удобно управлять собственным здоровьем.
                            <span class="h3 m-t m-b">Скоро на Вашем устройстве!</span>
                        </p>
                        <!--
                        <ul class="list-unstyled app-buttons">
                            <li><a href="#"><img src="/zdorovie48/img/mobile/app-store-btn.png" alt="" title="App Store"></a>
                            </li>
                            <li><a href="#"><img src="/zdorovie48/img/mobile/google-play-btn.png" alt=""
                                                 title="Google App"></a></li>
                        </ul>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Мобильное приложение -->


@endsection
