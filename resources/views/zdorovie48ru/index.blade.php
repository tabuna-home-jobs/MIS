@extends('zdorovie48ru/header')

@section('content')


    <div class="content-index">
    
    <section class="creative-sec hidden-xs">
        <div class="container">
            <div class="text-center">
                <h1 class="light">«многопрофильный медицинский центр»
                </h1>

                <p class="lead">широкий спектр медицинских услуг для всей семьи</p>
            </div>

            <div class="creative-sec-thumb one hidden-xs">
                <figure>
                <span class="overlay"><a href="/questanswer"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img1.jpg" width="154" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Вопрос - ответ</figcaption>
                </figure>
            </div>

            <div class="creative-sec-thumb two hidden-xs">
                <figure>
                <span class="overlay"><a href="/gallery"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img2.jpg" width="266" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Галерея</figcaption>
                </figure>
            </div>


            <div class="creative-sec-thumb three hidden-xs">
                <figure>
                    <span class="overlay"><a href="/reviews"><i class="fa fa-eye"></i></a></span>
                    <img width="162" title="" alt="" class="img-circle img-thumbnail img-responsive"
                         src="/site1.ru/images/creative-sec-img3.jpg">
                    <figcaption>Отзывы</figcaption>
                </figure>
            </div>


            <div class="creative-sec-thumb four hidden-xs">
                <figure>
                <span class="overlay"><a href="/team"><i class="fa fa-eye"></i></a></span>
                <img src="/site1.ru/images/creative-sec-img4.jpg" width="305" class="img-circle img-thumbnail img-responsive" alt="" title="">
                    <figcaption>Специалисты</figcaption>
                </figure>
            </div>
        </div>
    </section>


        <section class="medicom-awesome-features-sec hidden-xs" data-stellar-background-ratio="0.3">
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
                         <img src="/site1.ru/images/tablet_1.png" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tablet_2.png" alt="" title="">
                        </div>
                        <div class="item">
                        <img src="/site1.ru/images/tablet_3.png" alt="" title="">
                        </div>
                      </div>
				</div>
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

            <p class="lead">Быстрая и удобная запись к врачу</p>
            <div class="row">
                <div class="col-md-6 hidden-xs">
            <figure><img src="/site1.ru/images/appointment-img2.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
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
                                    <h5> Выберите специализацию</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select name="specialization" required>
                                            <option selected disabled>Выберите специализацию</option>
                                            @foreach($specialization as $spec)
                                                <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select disabled name="name" required>
                                            <option>Выберите врача</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select disabled name="subdivision" required>
                                            <option>Выберите место</option>
                                        </select>
                                    </div>


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

                                    <div class="form-group appointment-scroll" id="date">

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

                                    <input type="text" name="firstname" max="255" required placeholder="Имя">
                                    <input type="text" name="lastname" max="255" required placeholder="Фамилия">
                                    <input type="email" name="email" placeholder="Email адрес">
                                    <input name="phone" placeholder="Номер телефона" required type="text" data-mask="+ 9-999-999-99-99">
                                    <textarea rows="5" name="comment" placeholder="Комментарий"></textarea>
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





        <div class="row text-center no-margin hidden-xs">
            <div class="col-md-4 bg-default">
                <div class="home-box">
                    <span class="fa fa-stethoscope"></span>

                    <h3>Услуги</h3>

                    <p>Мы оказываем качественную и проффесиональную помощь</p>
                    <a class="btn-rounded btn-bordered" href="/service/53">Посмотреть</a>
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
                                8.00 - 21.00
                            </div>
                        </li>
                        <li class="clearfix">
				<span>
					Субота
				</span>

                            <div class="value">
                                8.00 - 18.00
                            </div>
                        </li>
                        <li class="clearfix">
				<span>
					Запись на прием  ежедневно
				</span>

                            <div class="value">
                                8:00 - 21:00
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 bg-default">
                <div class="home-box">
                    <span class="fa fa-user-md"></span>

                    <h3>Личный кабинет</h3>

                    <p>Отслеживайте свои результаты анализов не выходя из дома</p>
                    <a class="btn-rounded btn-bordered" href="/login">Войти</a>
                </div>
            </div>
        </div>

















        <div class="height40"></div>
    
    <div class="container">
    	<div class="row">
                <div class="col-md-7">
                    <div class="latest-news2">
                        <h2 class="light bordered">Последние <a href="/blog" style="text-decoration: underline"><span>Новости</span></a></h2>
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

                      <div id="collapse{{$value['id']}}" class="panel-collapse collapse">
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
















        <section class="medicom-app" data-stellar-background-ratio="0.3">
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
        </section>




    </div>

    @endsection