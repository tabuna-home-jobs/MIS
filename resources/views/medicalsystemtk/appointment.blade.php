@extends('medicalsystemtk/header')

@section('content')

    <section class="appointment-sec text-center">
        <div class="container">
            <h1>Записаться на приём к специалисту</h1>

            <p class="lead">Быстрая и удобная запись в врачу где бы вы не были</p>
            <div class="row">
            <div class="col-md-6">
            	<figure><img src="/site1.ru/images/appointment-img.jpg" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
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



    <style>
        .modal-starter {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
        }
        .service-box {
            position: relative;
        }
        .modal-body {
            text-align: left;
        }
    </style>


    <section class="services-sec container">
        <div style="cursor:pointer;position: relative;"  class="service-box one">
            <a class="modal-starter" data-toggle="modal" data-target="#myModal1"></a>
            <span class="icon img-circle"><i class="fa fa-lightbulb-o"></i></span>
            <h4><a  href="#.">Многопрофильность </a></h4>



            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Многопрофильность</h4>
                        </div>
                        <div class="modal-body">
                            «Здоровье нации» – это многопрофильный медицинский центр, ориентированный на оказание высококвалифицированной помощи жителям города и области.
                            <br><br>
                            «Здоровье нации» - это профессиональная команда специалистов, которые: <br>
                            - ответственно используют проверенные и надежные технологии;<br>
                            - постоянно работают над внедрением инноваций;<br>
                            - добиваются положительных результатов в каждом конкретном случае с каждым конкретным клиентом.

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="cursor:pointer;"  class="service-box two">
            <a class="modal-starter" data-toggle="modal" data-target="#myModal2"></a>
            <span class="icon img-circle"><i class="fa fa fa-flask"></i></span>
            <h4><a  href="#.">Квалификация специалистов</a></h4>


            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Квалификация специалистов</h4>
                        </div>
                        <div class="modal-body">
                            Врачи,  принимающие в нашем центре, с многолетним опытом работы, среди них доктора и кандидаты медицинских наук, врачи с высшей квалификационной категорией, заслуженные врачи Российской федерации. Вы можете записаться к ним на прием в удобное для Вас время.<br><br>
                            В медицинском центре «Здоровье Нации» собственная лаборатория, а как известно анализы  являются главной частью в диагностики заболеваний человека. Наша лаборатория оснащена современным оборудованием, которое соответствует всем требованиям федеральных и международных стандартов качества.<br><br>
                            Мы гарантируем оперативность, надежность, высокий профессионализм медицинского персонала лаборатории.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div style="cursor:pointer;"  class="service-box three">
            <a class="modal-starter" data-toggle="modal" data-target="#myModal3"></a>
            <span class="icon img-circle"><i class="fa fa-tint"></i></span>
            <h4><a href="#.">Безопасность</a></h4>


            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Безопасность</h4>
                        </div>
                        <div class="modal-body">
                            В медицинских центрах группы компаний «Здоровье нации» весь инструментарий стерилен, поэтому вы можете не волноваться о безопасности проведения процедур. Безопасность – этот принцип основывается на индивидуальности, одноразовости, стерильности.<br><br>
                            Одноразовый инструментарий: шприцы, иглы, одноразовые системы для внутривенного вливания, иглы - бабочки для забора крови, скарификатор, быстр в подготовке, не требует циклической стерилизации, минимизирует эпидемиологическую угрозу.<br><br>
                            Все используемые многоразовые инструменты проходят четыре  стадии  очистки:<br><br>
                            1.дезинфекцию<br>
                            2.ПСО (предстерилизационная очистка)<br>
                            3.стерилизация (в автоклавирующем  оборудовании Vacuclav 24B Германии)<br>
                            4.ополаскивание дистиллированной водой<br>
                            В нашей клинике используется упаковочный материал в рулонах для паровой стерилизации марки Steriguard  и упаковочный аппарат Legron, позволяющий в течение года  сохранять стерильность инструментария.<br>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div style="cursor:pointer;"  class="service-box four">
            <a class="modal-starter" data-toggle="modal" data-target="#myModal4"></a>
            <span class="icon img-circle"><i class="fa fa-phone"></i></span>
            <h4><a href="#.">Лояльность </a></h4>


            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Лояльность</h4>
                        </div>
                        <div class="modal-body">
                            Мы гарантируем индивидуальный подход, высокоточную диагностику на современном оборудовании, соблюдение всех норм и правил оказания медицинской помощи.
                            <br>
                            У нас действует система лояльности: <br>
                            - скидки по  накопительным картам «Любимый клиент»<br>
                            - скидки матерям одиночкам 5%<br>
                            - скидки медработникам 7%<br>
                            - скидки  пенсионерам 7%<br>
                            - скидки  детям инвалидам 10%<br>
                            - скидки многодетным семьям 10%

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="after-booking-sec text-center">
        <div class="container">
            <h1>Что дальше?</h1>


            <ul class="medicom-feature-list list-inline text-left">
                <li><i class="fa fa-check medicom-check"></i>Вы можете записаться на прием к любому врачу/специалисту нашего центра. Познакомиться с нашими врачами можно в разделе специалисты.</li>
                <li><i class="fa fa-check medicom-check"></i>Ваша заявка является предварительной.</li>
                <li><i class="fa fa-check medicom-check"></i>Указанная Вами дата приема может быть изменена в связи с действующим расписанием и существующей записью</li>
                <li><i class="fa fa-check medicom-check"></i>В течение часа с момента подачи заявки с Вами свяжется сотрудник колл-центра нашего центра и согласует окончательную дату приема.</li>
                <li><i class="fa fa-check medicom-check"></i>Для иногородних: просим Вас планировать приезд в  медицинский центр только после подтверждения даты приема.</li>
                <li><i class="fa fa-check medicom-check"></i>Будьте внимательны, указывайте правильный, действующий контактный номер телефона.</li>
                <li><i class="fa fa-check medicom-check"></i>Вы можете указать свой адрес электронной почты для того, чтобы получать информацию о скидках и специальных предложениях  медицинского центра «Здоровье Нации».</li>
                <li><i class="fa fa-check medicom-check"></i>Вы также можете позвонить нам по телефону:
                    <a href="tel:+74742227887">+7 (4742) 227-887</a> и записаться с 8.00 до 21.00 ежедневно.</li>

            </ul>
        </div>
    </section>



    <section class="about-sec text-center" data-stellar-background-ratio="0.3">
        <div class="container">
            <h1>Наш центр</h1>

            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

            <div class="row text-center" id="counters">
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter1 highlight">180</span>
                        <h6 class="counter-details">Посетителей</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter2 highlight">99</span>
                        <h6 class="counter-details">Сотрудников</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter3 highlight">50</span>
                        <h6 class="counter-details">Кабинетов</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter">
                        <span class="quantity-counter4 highlight">362</span>
                        <h6 class="counter-details">Наград</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <script>
        $('#myModal1').on('hide.bs.modal', function () {
            alert('asd');
        })
    </script>

@endsection