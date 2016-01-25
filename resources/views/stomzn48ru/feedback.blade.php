@extends('stomzn48ru/header')

@section('content')


    <section id="content">
        <div class="content_wrapper">

            <div class="title_box">
                <div class="container">
                    <div class="title_wr">
                        <h1>Контакты</h1>
                    </div>
                </div>
                <!--.container-->
            </div>



            @include("stomzn48ru.alert")

            <article id="post-899" class="post-899 page type-page status-publish hentry">

                <div class="container">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1443297815351">
                        <div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-4 vc_col-md-4 vc_custom_1443298021925">
                            <div class="wpb_wrapper">
                                <aside class="widget widget_contacts wpb_content_element vc_widgets style_3">
                                    <ul>
                                        <li>
                                            <div class="text"><strong>Мы Находимся</strong>

                                                <p>г. Липецк, ул. Октябрьская 61</p></div>
                                            <div class="icon"><i class="stm-icon-map-marker"></i></div>
                                        </li>
                                        <li>
                                            <div class="text"><strong>E-mail</strong>

                                                <p><a href="mailto:mother-baby@mail.ru">mother-baby@mail.ru</a></p>
                                            </div>
                                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                        </li>
                                        <li>
                                            <div class="text"><strong>Телефон</strong>

                                                <p>+7 (4742) 227-887</p></div>
                                            <div class="icon"><i class="stm-icon-roundels"></i></div>
                                        </li>
                                        <li>
                                            <div class="text"><strong>Часы приёма</strong>

                                                <p>Пн - Пт: 8:00 - 21:00<br>
                                                    Сб: :00 - 18:00</p></div>
                                            <div class="icon"><i class="stm-icon-clock"></i></div>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-8 vc_col-md-8 vc_custom_1443298031143">

                            <div class="wpb_wrapper"><h3 style="color: #4c4c4c;text-align: left"
                                                         class="vc_custom_heading vc_custom_1442473402530">Обратная связь</h3>

                                <div role="form" class="wpcf7">
                                    <div class="screen-reader-response"></div>
                                    <form action="/feedback" method="post" class="wpcf7-form">

                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="wpcf7-form-control-wrap name"><input type="text"
                                                                                                      name="fio"
                                                                                                      value="" size="40"
                                                                                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                      aria-required="true"
                                                                                                      aria-invalid="false"
                                                                                                      placeholder="ФИО"></span><span
                                                            class="input-addon"><i class="stm-icon-man"></i></span>
                                                </div>

                                                <div class="input-group">
                                                    <span class="wpcf7-form-control-wrap email"><input type="email"
                                                                                                       name="email"
                                                                                                       value=""
                                                                                                       size="40"
                                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"
                                                                                                       placeholder="Email"></span><span
                                                            class="input-addon"><i class="fa fa-envelope-o"></i></span>
                                                </div>

                                                <div class="input-group">
                                                    <span class="wpcf7-form-control-wrap email"><input type="text"
                                                                                                       name="phone"
                                                                                                       value=""
                                                                                                       size="40"
                                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"
                                                                                                       placeholder="Телефон"></span><span
                                                            class="input-addon"><i class="fa fa-phone"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                <div class="input-group no-bordered">
                                                    <span class="wpcf7-form-control-wrap message"><textarea
                                                                name="message" cols="40" rows="15"
                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Ваше сообщение"></textarea></span>
                                                </div>
                                            </div>
                                        </div>
                                        {!!csrf_field()!!}
                                        <p><input type="submit" value="Отправить"
                                                  class="wpcf7-form-control wpcf7-submit button square">
                                          </p>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!--.container-->

            </article> <!-- #post-## --></div>

    </section>

@endsection