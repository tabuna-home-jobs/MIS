@extends('cozn48ru/header')

@section('content')



<div class="img_slider container">
    {{ Block::make('slaiderOnMain', 'cozn48ru/_blocks/sliderOnMain') }}

</div>

<!--end of img_slider-->

<div class="dostoinstva">
    <div class="container">
        <div class="dost col-sm-12">
            <h2>ДОСТОИНСТВА ОСТЕОПАТИИ</h2>

            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f1.png">

                <p>Безопасна<br> и безболезненна</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f2.png">

                <p>Это лечение,<br> предложенное<br> самой природой</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f3.png">

                <p>Основана на<br> фундаментальном<br> знании врачом<br> анатомии</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f4.png">

                <p>Позволяет обнаружить<br> первопричину<br> заболевания<br> и быстро устранить её</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f5.png">

                <p>Эффективна</p>
            </div>
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="/cozn48.ru/img/f6.png">

                <p>Не требует<br> длительного<br> лечения</p>
            </div>
        </div>
    </div>
</div>
<!--end of dostoinstva-->
<div class="reasons">
    <div class="container">

        <h2>ПРИЧИНЫ ДЛЯ ОБРАЩЕНИЯ К ОСТЕОПАТУ</h2>

        <div class="crosses col-sm-12">

            <div class="block1 col-sm-offset-1 col-sm-5 col-xs-12">
                <div><img src="cozn48.ru/img/cross.png"> Невралгии, радикулиты</div>
                <div><img src="cozn48.ru/img/cross.png"> Боли в суставах и различных отделах позвоночника</div>
                <div><img src="cozn48.ru/img/cross.png"> Грыжи межпозвонковых дисков</div>
                <div><img src="cozn48.ru/img/cross.png"> Головные боли, головокружения, мигрени</div>
                <div><img src="cozn48.ru/img/cross.png"> Гипертонию, гипотонию</div>
                <div><img src="cozn48.ru/img/cross.png"> Плоскостопие</div>
                <div><img src="cozn48.ru/img/cross.png"> Последствия травм</div>
                <div><img src="cozn48.ru/img/cross.png"> Заболевания ЖКТ, печени и желчевыводящих путей</div>
            </div>
            <div class="block2 col-sm-offset-1 col-sm-5 col-xs-12">
                <div><img src="cozn48.ru/img/cross.png"> Болезни органов малого таза</div>
                <div><img src="cozn48.ru/img/cross.png"> Гаймориты, отиты, этмоидиты</div>
                <div><img src="cozn48.ru/img/cross.png"> Бронхит, бронхиальную астму</div>
                <div><img src="cozn48.ru/img/cross.png"> Родовые травмы у детей</div>
                <div><img src="cozn48.ru/img/cross.png"> Внутричерепную гипертензию у детей</div>
                <div><img src="cozn48.ru/img/cross.png"> Гиперактивность, заикание, энурез</div>
                <div><img src="cozn48.ru/img/cross.png"> Последствия стрессов</div>
                <div><img src="cozn48.ru/img/cross.png"> Ведение беременности и подготовка к родам</div>
            </div>
        </div>
    </div>
    <!--end of crosses-->
</div>
<!--end of reasons-->

<!--
<div class="appointment">
    <h2>ЗАПИСАТЬСЯ НА ПРИЁМ</h2>
    <div class="container">
        <div class="doctor col-lg-6 col-md-6 hidden-sm hidden-xs"><img src="cozn48.ru/img/doctor.png"></div>
        <div class="appointment-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <script type="text/javascript">
                //Шаг 2
                function secondStep(){
                    $(".stepr2").removeClass("bg-inactive-step");
                }
                //Шаг 3
                function thirdStep(){
                    $(".stepr3").removeClass("bg-inactive-step");
                }
                //Возвращение на первый шаг
                function gotofirst(){

                    $(".stepr2").addClass("bg-inactive-step");
                    $(".stepr3").addClass("bg-inactive-step");
                }
                //Возвращение на второй шаг
                function gotosecond(){

                    $(".stepr2").removeClass("bg-inactive-step");
                    $(".stepr3").addClass("bg-inactive-step");
                }
                //Переход на последний
                function gotolast(){

                    secondStep();
                    thirdStep();
                }

            </script>
            <div class="app-header">
                <div data-target="step1" onclick="gotofirst();" class="circle">1</div>
                <div data-target="step2" onclick="gotosecond();" class="stepr2 circle bg-inactive-step">2</div>
                <div data-target="step3" onclick="gotolast();" class="stepr3 circle bg-inactive-step">3</div>
                <div class="step">Шаг 1</div>
                <div class="step">Шаг 2</div>
                <div class="step">Шаг 3</div>
            </div>
            <form action="appointment/store" method="post">

                <div class="step1">
                    <div class="description-form">Специализация</div>
                    <div class="input-form">
                        <select name="specialization" required class="form-control">
                            <option selected disabled>Выберите специализацию</option>
                            @foreach($specialization as $spec)
                                <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                            @endforeach
                        </select></div>
                    <div class="description-form">Врач</div>
                    <div class="input-form">
                        <select disabled name="name" required class="form-control">
                            <option>Выберите врача</option>
                        </select>
                    </div>

                    <div class="description-form">Выберите место</div>
                    <div class="input-form">
                        <select disabled  name="subdivision" required class="form-control">
                            <option selected disabled>Выберите место</option>
                        </select>
                    </div>

                    <div class="fbtn butnstep">
                        <a class="" onclick="secondStep()" disabled>ДАЛЕЕ</a>
                    </div>
                </div>

                <div class="step2">
                    <h5> Врач может принять вас в следующие дни:</h5>
                    <div id="date">
                        <h5>Пусто</h5>
                    </div>
                    <div class="fbtn butnstep">
                        <a class="" onclick="thirdStep()">ДАЛЕЕ</a>
                    </div>
                </div>
                <div class="step3">
                    <h5> Информация</h5>
                    <div class="wrapper-form">
                        <input type="text" class="form-control" name="firstname" max="255" required placeholder="Имя">
                        <input type="text" class="form-control" name="lastname" max="255" required placeholder="Фамилия">
                        <input type="email" class="form-control" name="email" required placeholder="Email адрес">
                        <input type="text" class="form-control" name="phone" required placeholder="Номер телефона">
                        <textarea rows="4" class="form-control" name="comment" required placeholder="Комментарий"></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="fbtn"><button class="btn-block" type="submit" >ЗАПИСАТЬСЯ</button></div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

-->
<!-- apointment --><script>



    $('select[name="subdivision"]').change(function () {

        var Placevalue = $('select[name="subdivision"] :selected').val();
        var NameValue = $('select[name="name"] :selected').val();
        var Specialvalue = $('select[name="specialization"] :selected').val();
        var csrf = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            type: "POST",
            url: "/appointment/time/" + Placevalue + "/" + Specialvalue + "/" + NameValue,
            dataType: 'json',
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token', csrf);
            },
            success: function(msg){
                var option = "";

                $.each(msg, function (dateStr, timeObj) {
                    option += "<h5>" + dateStr + "</h5>";

                    $.each(timeObj, function (dateStr2, timeObj2) {


                        option += "<div class='radio'><label><input type='radio' required name='apport' value='" + this.beginning + "|" + this.end + "'> С " + this.Shours + ":" + this.Sminute + " по " + this.Ehours + ":" + this.Eminute + "</label></div>";

                    });

                });


                if (!option) {
                    option += "<h2>К данному специалисту нет свободной записи</h2>";
                }


                $('#date').html(option);


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

        $('select[name="name"]').html("<option selected disabled>Выберите врача</option>");

        var obj = $(this);
        var Curvalue = $(':selected',this).val();
        //var Placevalue = $('select[name="subdivision"] :selected').val();
        var csrf = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            type: "POST",
            url: "/appointment/fio/" + Curvalue,
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token', csrf);
            },
            success: function(msg){

                var option = "<option selected disabled>Выберите врача</option>";
                for(var i = 0; msg.length > i; i++)
                {
                    option += "<option value='"+ msg[i].name + "'>"
                            + msg[i].name + "</option>";
                }

                $('select[name="name"]').html(option);
                $('select[name="name"]').attr('disabled', false);

            }
        });


    });


    $('select[name="name"]').change(function () {

        $('select[name="subdivision"]').html("<option selected disabled>Выберите место</option>");
        var Curvalue = $(':selected',this).val();

        var NameValue = $('select[name="name"] :selected').val();
        var SpecialValue = $('select[name="specialization"] :selected').val();
        var csrf = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            type: "POST",
            url: "/appointment/place/" + SpecialValue + "/" + NameValue,
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token', csrf);
            },
            success: function(msg){


                var option = "<option selected disabled>Выберите место</option>";
                for(var i = 0; msg.length > i; i++)
                {

                    option += "<option value='" + msg[i].subdivision + "'>"
                            + msg[i].subdivision + "</option>";
                }

                $('select[name="subdivision"]').html(option);
                $('select[name="subdivision"]').attr('disabled', false);

            }
        });



    });

</script>
<!-- apointment -->




<div class="skidki off-block">
    <br>

    <h2>СКИДКИ И АКЦИИ</h2>

    <div class="sk">
        <div class="container">
            @foreach($getShares as $item)

            <div class="sk1 col-xs-12 col-md-12 col-sm-12 col-lg-4">
                <a href="/shares/{{$item['id']}}">
                    <img src="{{$item['avatar']}}">
                </a>
            </div>

                @endforeach
        </div>
    </div>
    <br>
</div>

<!--end of skidki-->


<h2>НАШИ СПЕЦИАЛИСТЫ</h2>

<div class="specialists ">
    <div class="container">

        <div class="best col-lg-3">
            <div class="bpart1 best_avatar">
                <img src="{!! $bestspec->avatar or 'cozn48.ru/img/sotrudnik_main.png' !!}">
            </div>
            <div class="bpart2">
                <img src="cozn48.ru/img/figurephoto.png">
            </div>
            <div class="textmonth"> ВРАЧ МЕСЯЦА</div>
            <div class="textstepname">{!! $bestspec->fio or 'Кедровская Наталья Борисовна'  !!}</div>
            <div class="tsspec">
                {!! $bestspec->subname or 'Специалист по массажу' !!}
            </div>
        </div>
        <div class="everypeople col-lg-9">
            @foreach($allspecs as $key => $item )

                <div class="col-md-4">
                    <img src="{{$item['avatar']}}">

                    <div class="ptext">{{$item['fio']}}
                        <div class="specialisation">{{$item['subname']}}</div>
                    </div>
                </div>
                @if(($key+1) % 3 == 0)
                <div class="clearfix"></div>
                @endif
            @endforeach
        </div>
        <div class="main-all"><!--end of specialists-->
            <br>
            <div class="seeall"><img src="cozn48.ru/img/minibutton.png"><a href="/team">Посмотреть всех</a><br></div>
        </div>
    </div>
</div>

<div class="news off-block">
    <h2>НОВОСТИ</h2>

    <div class="container">

        @foreach($getNews as $item)

            <div class="news1 col-md-3 col-sm-6 col-xs-12">
                <img src="{{$item['avatar']}}">
                <div class="s1"><a href="/blog/{{$item['id']}}">{{$item['name']}}</a></div>

                <div class="textnews1">
                    {{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}
                </div>
                <div class="date1">
                    {{$item['created_at']}}
                </div>
            </div>

        @endforeach

    </div>
</div>
<div class="sites-slider">
    <div class="container">
        <h2>САЙТЫ ГРУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</h2>
        <div class="autoplay">
            <div class="sl-img">
                <a href="http://mother-baby.ru/" target="_blank" alt="Центр детского здоровья">
                    <img src="cozn48.ru/img/zn1.png">
                </a>
            </div>

            <div class="sl-img">
                <a href="http://zdorovie48.ru/" target="_blank">
                    <img src="cozn48.ru/img/zn3.png" alt="Здоровье нции">
                </a>
            </div>
            <div class="sl-img">
                <a href="http://luchiki48.ru/" target="_blank" >
                    <img src="cozn48.ru/img/zn4.png" alt="Студия раннего развития детей «Лучики»">
                </a>
            </div>
            <div class="sl-img">
                <a href="http://sokzn48.ru/" target="_blank">
                    <img src="cozn48.ru/img/zn5.png" alt="«Центр остеопатии»">
                </a>
            </div>
        </div>
        <script type="text/javascript">
            $('.autoplay').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
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
<!--end of news-->
<br>

<div class="map">

    <script type="text/javascript" charset="utf-8"
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=nLG7p1-vbVZ40JWbYYtbBh9udCUS_5SM&width=100%&height=450"></script>

</div>
<!--end map-->
@endsection
