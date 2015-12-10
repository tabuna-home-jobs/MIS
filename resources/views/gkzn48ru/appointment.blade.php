@extends('gkzn48ru/headerALT')



@section('headerTitle','Записаться на приём к специалисту')

@section('content')

    <section class="appointment-sec text-center">
        <div class="container">


            <div class="heading_e"><h3>Записаться на приём к специалисту</h3>

                <p>Быстрая и удобная запись в врачу где бы вы не были</p><h4><img
                            src="/public/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
            </div>

            <div class="row">

            <div class="col-md-7">


                <div class="appointment-form clearfix widget-form-white-short">
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
                                    <h5> Выберите место</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select class="form-control" name="subdivision" required>
                                            <option selected disabled>Выберите место</option>
                                            @foreach($place as $placeItem)
                                                <option value="{{$placeItem->subdivision}}">{{$placeItem->subdivision}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select class="form-control" disabled name="specialization" required>
                                            <option>Выберите место</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select class="form-control" disabled name="name" required>
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




                                    <button class="btn btn-default btn-normal  nextBtn btn-rounded pull-right" type="button">
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

                                    <button class="btn btn-default btn-normal nextBtn btn-rounded pull-right" type="button">Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Информация</h5>


                                    <div class="form-group">
                                         <input type="text" class="form-control" name="firstname" max="255" placeholder="Имя">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastname" max="255" placeholder="Фамилия">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email адрес">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" placeholder="Номер телефона">
                                   </div>
                                    <div class="form-group">
                                    <textarea rows="4" class="form-control" name="comment" placeholder="Комментарий"></textarea>
                                    </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-default btn-normal btn-4 btn-rounded pull-right" type="submit">Записаться!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>



                <div class="col-md-5">
                    <figure class="pull-right"><img src="/gkzn48ru/images/popup-doctor.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
                </div>

            </div>




        </div>
    </section>













    <div class="overlay-none">
        <div class="container xsx-width">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="vc_col-sm-12 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="heading_e"><h3>Наша цель – здоровое зачатие, рождение и развитие человека.</h3>

                            <p>Мы бережно и уважительно относимся к нашим клиентам и сотрудникам.</p><h4><img
                                        src="/public/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png"
                                        alt="heading"></h4></div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1409843233310">
                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="elements_service_bg">
                                        <div class="service_bg service_bg_1"
                                             style="background: url(/gkzn48ru/wp-content/uploads/2014/09/blog-style-1.jpg) 50% 0 no-repeat;">
                                            <div class="icon">
                                                <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                                <div class="icon-2"><i class="fa fa-phone fa-inverse fa-lg"></i></div>
                                            </div>
                                            <div class="describe"><h4>Удобное расположение</h4>

                                                <p>Наши центры не только удобно территориально расположены, но оснащены современными диагностическими оборудованем</p><a
                                                        href="/feedback">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="elements_service_bg">
                                        <div class="service_bg service_bg_1"
                                             style="background: url(/gkzn48ru/wp-content/uploads/2014/09/blog-style-2.jpg) 50% 0 no-repeat;">
                                            <div class="icon">
                                                <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                                <div class="icon-2"><i class="fa fa-calendar-o fa-inverse fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="describe"><h4>Запись на приём</h4>

                                                <p>С помощью интернет-регистратуры можно
                                                    записаться на прием к врачу в удобное
                                                    для вас время.</p><a
                                                        href="/appointment">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="elements_service_bg">
                                        <div class="service_bg service_bg_1"
                                             style="background: url(/gkzn48ru/wp-content/uploads/2014/09/blog-style-3.jpg) 50% 0 no-repeat;">
                                            <div class="icon">
                                                <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                                <div class="icon-2"><i class="fa fa-star fa-inverse fa-lg"></i></div>
                                            </div>
                                            <div class="describe"><h4>Бесплатная консультация</h4>

                                                <p>Профильные врачи, доступные круглосуточно из любой точки мира. Нужен только интернет и компьютер или смартфон.</p><a
                                                        href="#">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection