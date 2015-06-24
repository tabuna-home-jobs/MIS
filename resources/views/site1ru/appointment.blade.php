@extends('site1ru/header')

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
                                        <select name="place" required>
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
                                        <select disabled name="fio" required>
                                            <option>Выберите специализацию</option>
                                        </select>
                                    </div>



                                    <script>
                                      $('select[name="place"]').change(function () {

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
                                            var Placevalue = $('select[name="place"] :selected').val();
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

                                                    $('select[name="fio"]').html(option);
                                                    $('select[name="fio"]').attr('disabled',false);

                                                }
                                            });


                                        });











                                      $('select[name="fio"]').change(function () {


                                          var obj = $(this);
                                          var Curvalue = $(':selected',this).val();
                                          var Placevalue = $('select[name="place"] :selected').val();
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
                                                      option += "<div class='radio'><label><input type='radio' name='apport' value='"+ msg[i].beginning+"|"+msg[i].end+"'> С " + beginning+ " по " +end+"</label></div>";

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

                                    <input type="text" name="firstname" placeholder="Имя">
                                    <input type="text" name="lastname" placeholder="Фамилия">
                                    <input type="email" name="email" placeholder="Email адрес">
                                    <input type="text" name="phone" placeholder="Номер телефона">
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
    
    
    
    <section class="after-booking-sec text-center">
        <div class="container">
            <h1>Что дальше?</h1>

            <p class="lead">В течении несколько минут вам перезвонит сотрудник нашего центра что бы уточнить
                подробности</p>
            <ul class="medicom-feature-list list-inline text-left">
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
            </ul>
        </div>
    </section>
    
    @endsection