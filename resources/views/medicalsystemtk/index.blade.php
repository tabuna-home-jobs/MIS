@extends('medicalsystemtk/header')

@section('content')


    <div class="content-index">
    
    <section class="creative-sec">
        <div class="container">
            <!--<div class="text-center">
                <h1 class="light">«Здоровье Нации»
                </h1>

                <p class="lead"> многопрофильная компания, оказывающая широкий спектр услуг для всей семьи отрудников и
                    клиентов.</p>
            </div>-->

            <div class="creative-sec-thumb one">
                <figure>
                <span class="overlay"><a href="/questanswer"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img1.jpg" width="154" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Вопрос - ответ</figcaption>
                </figure>
            </div>

            <div class="creative-sec-thumb two">
                <figure>
                <span class="overlay"><a href="/gallery"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img2.jpg" width="266" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Галерея</figcaption>
                </figure>
            </div>


            <div class="creative-sec-thumb three">
                <figure>
                    <span class="overlay"><a href="/reviews"><i class="fa fa-eye"></i></a></span>
                    <img width="162" title="" alt="" class="img-circle img-thumbnail img-responsive"
                         src="/site1.ru/images/creative-sec-img3.jpg">
                    <figcaption>Отзывы</figcaption>
                </figure>
            </div>


            <div class="creative-sec-thumb four">
                <figure>
                <span class="overlay"><a href="/team"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img4.jpg" width="305" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Специалисты</figcaption>
                </figure>
            </div>
        </div>
    </section>
    
    
    <section class="medicom-awesome-features-sec" data-stellar-background-ratio="0.3">
    <div class="featires-overlay"></div>
    	<div class="container">
        <div class="text-center">
            <h1 class="light">Здоровье нации – наша цель</h1>

            <p class="lead">Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное.
                С нами вы будете уверены в своём здоровье и в здоровье ваших близких.</p>
		</div>
			<ul class="awesome-features list-unstyled pull-left text-right">
                <li><i class="pull-right img-circle fa fa-ambulance"></i><span>Индивидуальный</span>подход к каждому
                    клиенту центра
                </li>
                <li class="middle"><i class="pull-right img-circle fa fa-eye"></i><span>Внимание</span> со стороны
                    персонала
                </li>
                <li><i class="pull-right img-circle fa fa-flask"></i><span>Качество</span>проверенное временем</li>
            </ul>
            <div class="tab-slider">
            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active text-center">
                         <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tab-slider-img.jpg" alt="" title="">
                        </div>
                      </div>
				</div>
            	<span class="hand"></span>
            </div>
            <ul class="awesome-features list-unstyled pull-right text-left">
                <li><i class="pull-left img-circle fa fa-user-md"></i><span>Отличная</span>квалификация специалистов
                </li>
                <li class="middle"><i class="pull-left img-circle fa fa-heart"></i><span>Комфорт</span>и безопасность
                    для детей и родителей.
                </li>
                <li><i class="pull-left img-circle fa fa-tint"></i><span>Современное </span>медицинское оборудование.
                </li>
            </ul>
        </div>
    </section>
    
    
    <section class="appointment-sec text-center bg-gray">
        <div class="container">
            <h1>Записаться на приём</h1>

            <p class="lead">Быстрая и удобная запись в врачу где бы вы не были</p>
            <div class="row">
            <div class="col-md-6">
            <figure><img src="/site1.ru/images/appointment-img2.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
            </div>
            <div class="col-md-6">




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
                                    <h5> Выберите специализацию</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select name="subdivision" required>
                                            <option selected disabled>Выберите место</option>
                                            @foreach($place as $placeItem)
                                                <option value="{{$placeItem->subdivision}}">{{$placeItem->subdivision}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select disabled name="specialization" required>
                                            <option>Выберите место</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select disabled name="name" required>
                                            <option>Выберите специализацию</option>
                                        </select>
                                    </div>



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




                                    <button class="btn btn-default  nextBtn btn-rounded pull-right" type="button">
                                        Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите дату</h5>

                                    <div class="form-group" id="date">

                                    </div>

                                    <button class="btn btn-default nextBtn btn-rounded pull-right" type="button">Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Информация</h5>

                                    <input type="text" name="firstname" max="255" placeholder="Имя">
                                    <input type="text" name="lastname" max="255" placeholder="Фамилия">
                                    <input type="email" name="email" placeholder="Email адрес">
                                    <input type="number" name="phone" placeholder="Номер телефона">
                                    <textarea rows="4" name="comment" placeholder="Комментарий"></textarea>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-default btn-rounded pull-right" type="submit">Записаться!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
             </div>
        </div>

    </section>






        <div class="row text-center no-margin">
            <div class="col-md-4 bg-default">
                <div class="home-box">
                    <span class="fa fa-stethoscope"></span>

                    <h3>Услуги</h3>

                    <p>Текст про наши услуги, Текст про наши услуги , Текст про наши услуги, Текст про наши услуги</p>
                    <a class="btn-rounded btn-bordered" href="/service">Посмотреть</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home-box opening-hours clearfix">
                    <span class="glyphicon glyphicon-time"></span>

                    <h3>Часы приёма</h3>

                    <p>Мы всегда рады видеть вас в нашем медицинском центре</p>
                    <ul class="list-unstyled">
                        <li class="clearfix">
				<span>
					Понедельник - Пятница
				</span>

                            <div class="value">
                                8.00 - 16.00
                            </div>
                        </li>
                        <li class="clearfix">
				<span>
					Субота
				</span>

                            <div class="value">
                                9.30 - 15.30
                            </div>
                        </li>
                        <li class="clearfix">
				<span>
					Воскресенье
				</span>

                            <div class="value">
                                9.30 - 17.00
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 bg-default">
                <div class="home-box">
                    <span class="fa fa-user-md"></span>

                    <h3>Личный кабинет</h3>

                    <p>Текст про наши услуги, Текст про наши услуги , Текст про наши услуги, Текст про наши услуги</p>
                    <a class="btn-rounded btn-bordered" href="#.">Посмотреть</a>
                </div>
            </div>
        </div>












        <div class="height40"></div>
    
    <div class="container">
    	<div class="row">
                <div class="col-md-7">
                    <div class="latest-news2">
                        <h2 class="light bordered">Последнии <a href="/blog" style="text-decoration: underline"><span>Новости</span></a></h2>
                        <ul id="mycarousel" class="jcarousel-skin-tango blog-style2 list-unstyled">

                            @foreach($getNews as $key => $value)



                                <li>
                                    <i class="post-icon img-circle fa fa-file-text"></i>
                            <article class="blog2-item">
                            <div class="blog2-thumbnail">
                                <img src="{{$value['avatar']}}" alt="">
                            </div>
                            <div class="blog2-content">
                            <span class="arrow-right"></span>
                                <h4 class="blog2-title"><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h4>

                                <p class="post-date">{{$value['created_at']}}</p>
                               <p>
                                   {{str_limit((strip_tags($value['content'])), $limit = 130, $end = '...')}}
                               </p>
                                <p class="text-right"><a href="/blog/{{$value['id']}}">Читать дальше</a></p>
                            </div>
                            </article>
                            </li>


                            @endforeach

                        </ul>

                    </div>

                </div>
                <div class="col-md-5">
                <h2 class="light bordered">Наши <span>Акции</span></h2>
                
                <div class="panel-group accordian-style2" id="accordion2">


                    @foreach($getShares as $key => $value)

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title active">
                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$value['id']}}">
                              {{$value['name']}}<i class="fa pull-right fa-angle-up"></i>
                        </a>
                      </h4>
                    </div>

                      <div id="collapse{{$value['id']}}" class="panel-collapse collapse @if($key == 0) in @endif ">
                          <div class="panel-heading">
                              <span class="text-center"><img src="{{$value['avatar']}}"></span>
                          </div>
                      <div class="panel-body">
                          {!! $value['content'] !!}
                      </div>
                          <div class="panel-footer">
                              c {{$value['start']}} по {{$value['end']}}
                          </div>
                    </div>
                  </div>

                    @endforeach




				</div>
                </div>
            </div>

    </div>
















        <!--<section class="medicom-app" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="/site1.ru/images/mobile-hand.png" class="app-img" alt="" title="">
                    </div>
                    <div class="col-md-7">
                        <div class="medicom-app-content">
                            <h1>Всегда вместе</h1>

                            <p class="lead">Попробуйте мобильное приложение "Здоровье Нации" на своём устройстве,
                                которое позволит
                                вам удобно управлять собственным здоровьем.
                                <span>Бесплатно!</span>
                            </p>
                            <ul class="list-unstyled app-buttons">
                                <li><a href="#."><img src="/site1.ru/images/app-store-btn.png" alt="" title="App Store"></a></li>
                                <li><a href="#."><img src="/site1.ru/images/google-play-btn.png" alt="" title="Google App"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <div class="map-on-main">
            <div class="bage">
                <div class="footer-widget">
                    <h4><span>Мы находимся</span></h4>
                    <div class="contact-widget">
                        <i class="fa fa-home"></i><p>г.Липецк, ул.Октябрьская, д.61</p>
                        <i class="fa fa-envelope"></i><p>octavian48@yandex.ru</p>
                        <i class="fa fa-mobile"></i><p class="phone-number">(4742) 227-887, 227-8881</p>
                        <i class="fa fa-clock-o"></i><p class="phone-number"> Понедельник-пятница: 8:00-21:00<br>
                            Суббота: 8:00-18:00<br>
                            Воскресенье: 10:00-16:00</p>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=JOw68K82DOpDjANXKNZxxptogev8Vshe&width=100%&height=450&lang=ru_RU&sourceType=constructor"></script>
            </div>
        </div>


        <div class="slider-companies col-md-12">
            <div class="content-head"><h2>Сайты ГК "Здоровье нации</h2></div>
            <div class="slider-sites autoplay">
                <div class="sites-slide"><a target="_blank" href="http://mother-baby.ru"><img src="/karta-uspeha.ru/img/zn1.png"></a></div>
                <div class="sites-slide"><a target="_blank" href="http://karta-uspeha.ru"><img src="/karta-uspeha.ru/img/zn2.png"></a></div>
                <div class="sites-slide"><a target="_blank" href="http://luchiki48.ru"><img src="/karta-uspeha.ru/img/zn4.png"></a></div>
                <div class="sites-slide"><a target="_blank" href="http://sokzn48.ru"><img src="/karta-uspeha.ru/img/zn5.png"></a></div>
                <div class="sites-slide"><a target="_blank" href="http://stomzn48.ru"><img src="/karta-uspeha.ru/img/zn6.png"></a></div>
                <div class="sites-slide"><a target="_blank" href="http://cokzn48.ru"><img src="/karta-uspeha.ru/img/zn7.png"></a></div>
                <!-- остеопатии, стоматология,  -->
            </div>
            <script type="text/javascript">
                $('.autoplay').slick({
                    prevArrow:'<button type="button" class="slick-prev-custom"><i class="fa fa-angle-left"></i></button>',
                    nextArrow:'<button type="button" class="slick-next-custom"><i class="fa fa-angle-right"></i></button>',
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                            breakpoint: 1000,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 2,
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


    </div>

    @endsection