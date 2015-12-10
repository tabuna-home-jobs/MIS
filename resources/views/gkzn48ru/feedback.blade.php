@extends('gkzn48ru/headerALT')


@section('headerTitle','Связаться с нами')


@section('content')



    <section class="big_map">

        <div class="container xsx-width">
            <div class="row">
                <div class="col-md-12">
                    <div id="map-canvas"
                         style="height: 350px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">

                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2423.2438515896024!2d39.592403!3d52.601363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413a14e9eece3c35%3A0xdfbc4fe617d626e0!2z0J7QutGC0Y_QsdGA0YzRgdC60LDRjyDRg9C7LiwgNjEsINCb0LjQv9C10YbQuiwg0JvQuNC_0LXRhtC60LDRjyDQvtCx0LsuLCAzOTgwNTk!5e0!3m2!1sru!2sru!4v1432638437060"
                                    height="350px" width="100%" frameborder="0"></iframe>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="appointments">
        <div class="container xsx-width">
            <div class="row">
                <!-- ===== Begin Contact Form ===== -->
                <div class="col-sm-8 appointment">

                    <!-- ===== Begin Title Content ===== -->
                    <div class="titleC">
                        <h4>Обратная связь</h4>

                        <div class="right-linie">
                            <span></span>
                        </div>
                    </div>
                    <!-- ===== End Title Content ===== -->


                    <p>Медицинский центр «Здоровье Нации» - Контакты, схема проезда, график работы</p>


                    <form action="/feedback" method="post" class="comment-form">
                        <ul class="comment-form-inputs">


                            <li>
                            <input type="text" name="fio" placeholder="ФИО" required>
                            </li>
                            <li>
                            <input type="email" name="email" placeholder="Email" required>
                            </li>

                            <li>
                            <input type="text" name="phone" placeholder="Телефон" required>
                            </li>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </ul>
                        <textarea rows="10"  name="message" required placeholder="Текст сообщения"></textarea>

                        <p class="form-submit">
                            <input name="submit" type="submit" value="Отправить">
                        </p>
                    </form>


                </div>
                <!-- ===== End Contact Form ===== -->

                <!-- ===== Begin Contact Info ===== -->
                <aside class="col-sm-4 appointmentS">
                    <div id="text-2" class="widget widget-widget_text">
                        <div class="titleC"><h4>Контактная информация</h4>

                            <div class="right-linie"><span></span></div>
                        </div>
                        <div class="textwidget">

                            <div class="row">
                                <div class="col-md-12">
                                    <address class="text-center">
                                       "Здоровье Нации"<br>
                                        ул.Октябрьская д.61<br>
                                        г. Липецк, 398037
                                    </address>
                                </div>
                                <div class="col-md-12">
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-phone"></i> Телефон: (4742) 227-887</li>
                                        <li><i class="fa fa-fax"></i> Факс: +123 755 755</li>
                                        <li><i class="fa fa-envelope"></i> Email: mother-baby@mail.ru</li>
                                        <li><i class="fa fa-clock-o"></i> Понедельник-пятница: 8:00-21:00<br>
                                            Суббота: 8:00-18:00
                                            <br>
                                            Запись на прием по телефону с 8.00 до 21.00 ежедневно
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- ===== End Contact Info ===== -->
            </div>
        </div>
    </section>

@endsection