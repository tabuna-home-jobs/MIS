@extends('gkzn48ru/headerALT')



@section('headerTitle','Записаться на приём к специалисту')

@section('content')

    <section class="appointment-sec text-center">
        <div class="container">


            <div class="heading_e"><h3>Записаться на приём к специалисту</h3>

                <p>Быстрая и удобная запись в врачу где бы вы не были</p><h4><img
                            src="/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
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
                                    <h5> Выберите специализацию</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select name="specialization" required class="form-control">
                                            <option selected disabled>Выберите специализацию</option>
                                            @foreach($specialization as $spec)
                                                <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select disabled name="name" required  class="form-control">
                                            <option>Выберите врача</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select disabled name="subdivision" required  class="form-control">
                                            <option>Выберите место</option>
                                        </select>
                                    </div>





                                    <script>
                                        $('select[name="subdivision"]').change(function () {

                                            var Placevalue =  $('select[name="subdivision"] :selected').val();
                                            var NameValue = $('select[name="name"] :selected').val();
                                            var Specialvalue = $('select[name="specialization"] :selected').val();
                                            var csrf = $('meta[name="csrf-token"]').attr('content');


                                            $.ajax({
                                                method: "POST",
                                                url: "/appointment/time/" + Placevalue +"/"+ Specialvalue +"/"+ NameValue ,
                                                dataType: 'json',
                                                beforeSend: function(request) {
                                                    request.setRequestHeader('X-CSRF-Token', csrf);
                                                },
                                                success: function(msg){
                                                    var option = "";



                                                    $.each(msg, function(dateStr,timeObj) {
                                                        option += "<h4>"+dateStr+"</h4>";

                                                            $.each(timeObj, function(dateStr2,timeObj2) {
                                                                console.log(this.beginning);

                                                                option += "<div class='radio'><label><input type='radio' required name='apport' value='" + this.beginning + "|" + this.end + "'> С " + this.Shours + ":" + this.Sminute + " по " + this.Ehours + ":" + this.Eminute + "</label></div>";

                                                            });

                                                    });


                                                    if(!option){
                                                        option += "<h2>К данному специалисту нет свободной записи</h2>";
                                                    }


                                                    $('#date').html(option);


                                                },
                                                error: function()
                                                {
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
                                                url: "/appointment/fio/" + Curvalue ,
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
                                                url: "/appointment/place/" + SpecialValue + "/" + NameValue ,
                                                beforeSend: function(request) {
                                                    request.setRequestHeader('X-CSRF-Token', csrf);
                                                },
                                                success: function(msg){


                                                    var option = "<option selected disabled>Выберите место</option>";
                                                    for(var i = 0; msg.length > i; i++)
                                                    {

                                                        option += "<option value='"+ msg[i].subdivision + "'>"
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

                                    <input type="text" name="firstname" max="255" placeholder="Имя"  class="form-control">
                                    <input type="text" name="lastname" max="255" placeholder="Фамилия"  class="form-control">
                                    <input type="email" name="email" placeholder="Email адрес"  class="form-control">
                                    <input type="number" name="phone" placeholder="Номер телефона"  class="form-control">
                                    <textarea rows="4" name="comment" placeholder="Комментарий"  class="form-control"></textarea>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-default btn-rounded pull-right" type="submit">Записаться!
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
                                        src="/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png"
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