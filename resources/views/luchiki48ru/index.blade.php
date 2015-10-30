@extends('cozn48ru/header')

@section('content')


<div class="img_slider container">

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
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="cozn48.ru/img/mdp.jpg" alt="центр остеопатии">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->

    </div>
</div>
<!--end of img_slider-->

<div class="dostoinstva">
    <div class="container">
        <div class="dost col-sm-12">
            <h2>ДОСТОИНСТВА ОСТЕОПАТИИ</h2>

            @foreach(GoodsMain::getGoods(6,41) as $item)
            <div class="f1 col-sm-4 col-md-2 col-xs-12">
                <img src="{{$item['avatar']}}">
                <p>{{$item['name']}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--end of dostoinstva-->
<div class="reasons">
    <div class="container">

        <h2>ПРИЧИНЫ ДЛЯ ОБРАЩЕНИЯ К ОСТЕОПАТУ</h2>

        <div class="crosses col-sm-12">
            <div class="block1 col-sm-6 col-xs-12">
                <div><img src="cozn48.ru/img/cross.png"> Невралгии, радикулиты</div>
                <div><img src="cozn48.ru/img/cross.png"> Боли в суставах и различных отделах позвоночника</div>
                <div><img src="cozn48.ru/img/cross.png"> Грыжи межпозвонковых дисков</div>
                <div><img src="cozn48.ru/img/cross.png"> Головные боли, головокружения, мигрени</div>
                <div><img src="cozn48.ru/img/cross.png"> Гипертонию, гипотонию</div>
                <div><img src="cozn48.ru/img/cross.png"> Плоскостопие</div>
                <div><img src="cozn48.ru/img/cross.png"> Последствия травм</div>
                <div><img src="cozn48.ru/img/cross.png"> Заболевания ЖКТ, печени и желчевыводящих путей</div>
            </div>
            <div class="block2 col-sm-6 col-xs-12">
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
<div class="appointment">
    <h2>ЗАПИСАТЬСЯ НА ПРИЁМ</h2>
    <div class="container">
        <div class="doctor col-lg-6 col-md-6 hidden-sm hidden-xs"><img src="cozn48.ru/img/doctor.png"></div>
        <div class="appointment-form col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="app-header">
                <div data-target="step1" class="circle">1</div>
                <div data-target="step2" class="circle">2</div>
                <div data-target="step3" class="circle">3</div>
                <div class="step">Шаг 1</div>
                <div class="step">Шаг 2</div>
                <div class="step">Шаг 3</div>
            </div>
            <form>
                <div class="step1">
                <div class="description-form">Выберите место</div>
                <div class="input-form"><select name="subdivision" required>
                        <option selected disabled>Выберите место</option>
                        @foreach($place as $placeItem)
                            <option value="{{$placeItem->subdivision}}">{{$placeItem->subdivision}}</option>
                        @endforeach
                    </select></div>
                <div class="description-form">Специализация</div>
                <div class="input-form"><select disabled name="specialization" required>
                        <option>Выберите специализацию</option>
                    </select></div>
                <div class="description-form">Врач</div>
                <div class="input-form"><select disabled name="name" required>
                        <option>Выберите Врача</option>
                    </select></div>
                <div class="fbtn"><a>ДАЛЕЕ</a></div>
                </div>
                <div class="step2">
                    <h5> Врач может принять вас в следующие дни:</h5>
                    <div id="date"></div>
                    <div class="fbtn"><a>ДАЛЕЕ</a></div>
                </div>
                <div class="step3">
                    <h5> Информация</h5>
                    <div>
                        <input type="text" name="firstname" max="255" placeholder="Имя">
                        <input type="text" name="lastname" max="255" placeholder="Фамилия">
                        <input type="email" name="email" placeholder="Email адрес">
                        <input type="number" name="phone" placeholder="Номер телефона">
                        <textarea rows="4" name="comment" placeholder="Комментарий"></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="fbtn"><button>ЗАПИСАТЬСЯ</button></div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


<!-- apointment -->
<script>
    $('select[name="subdivision"]').change(function () {

        var obj = $(this);
        var Curvalue = $(':selected',this).val();
        var csrf = $('meta[name="csrf-token"]').attr('content');



        $.ajax({
            type: "POST",
            url: "/appointment/special/" + Curvalue ,
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token', csrf);
            },
            success: function(msg){

                var option = "<option selected disabled>Выберите специализацию</option>";
                for(var i = 0; msg.length > i; i++)
                {
                    option += "<option value='"+ msg[i].specialization + "'>"
                            + msg[i].specialization + "</option>";
                }

                $('select[name="specialization"]').html(option);
                $('select[name="specialization"]').attr('disabled',false);

            }
        });

    });




    $('select[name="specialization"]').change(function () {


        var obj = $(this);
        var Curvalue = $(':selected',this).val();
        var Placevalue = $('select[name="subdivision"] :selected').val();
        var csrf = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            type: "POST",
            url: "/appointment/fio/" + Placevalue +"/"+ Curvalue ,
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


        var obj = $(this);
        var Curvalue = $(':selected',this).val();
        var Placevalue = $('select[name="subdivision"] :selected').val();
        var Specialvalue = $('select[name="specialization"] :selected').val();
        var csrf = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            type: "POST",
            url: "/appointment/time/" + Placevalue +"/"+ Specialvalue +"/"+ Curvalue ,
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token', csrf);
            },
            success: function(msg){

                var option = "";

                for(var i = 0; msg.length > i; i++)
                {
                    var beginning = new Date(msg[i].beginning * 1000).toLocaleString();
                    var end = new Date(msg[i].end * 1000).toLocaleString();
                    option += "<div class='radio'><label><input type='radio' required name='apport' value='" + msg[i].beginning + "|" + msg[i].end + "'> С " + beginning + " по " + end + "</label></div>";

                }








                $('#date').html(option);

            }
        });


    });














</script>
<!-- apointment -->

<h2>НАШИ СПЕЦИАЛИСТЫ</h2>

<div class="specialists ">
    <div class="container">

        <div class="best col-lg-3">
            <div class="bpart1">
                <img src="cozn48.ru/img/sotrudnik_main.png">
            </div>
            <div class="bpart2">
                <img src="cozn48.ru/img/figurephoto.png">
            </div>
            <div class="textmonth"> ВРАЧ МЕСЯЦА</div>
            <div class="textstepname"><strong>Кедровская</strong><br> Наталья Борисовна</div>
            <div class="tsspec">
                Специалист по массажу<br> высшей категории,<br>
                специализация:<br> медицинский массаж
            </div>
        </div>
        <div class="everypeople col-lg-9">
                @foreach(SpecialOnMain::getSpec(6) as $item )
                <div class="col-md-4">
                    <img src="{{$item['avatar']}}">

                    <div class="ptext">{{$item['fio']}}
                        <div class="specialisation">{{$item['subname']}}</div>
                    </div>
                </div>
                @endforeach
    </div>
</div>
<div><!--end of specialists-->
    <br>
    <div class="seeall"><img src="cozn48.ru/img/minibutton.png"><a href="/team">Посмотреть всех</a><br></div>
</div>
<br>
</div>


<div class="skidki">
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

<div class="news">
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
        <h2>САЙТЫ ГУППЫ КОМПАНИЙ «ЗДОРОВЬЕ НАЦИИ»</h2>
        <div class="autoplay">
            <div class="sl-img"><img src="cozn48.ru/img/zn1.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn2.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn3.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn4.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn5.png"></div>
            <div class="sl-img"><img src="cozn48.ru/img/zn-blank.png"></div>
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