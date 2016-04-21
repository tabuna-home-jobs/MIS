@extends('sokzn48ru/ALTheader')
@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading"><h2>Контакты</h2> <span>Свяжитесь с нами с нами, когда вам нужно</span>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content">
            <div id="post-254" class="post-254 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container p-t-30">
                        <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="/">Главная</a></li>

                            <li>Контакты</li>
                        </ul>
                            </div>
                        <div class="vc_row wpb_row vc_row-fluid bg-while luchiki-margin-0">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wpb_column vc_column_container vc_col-sm-4 vc_custom_1425691979898">

                                <div class="wpb_wrapper">
                                    <div class="luchiki-contact-info  ">
                                        <div class="contact-icon"><i class="fa fa-location-arrow"></i></div>
                                        <h4>Мы распологаемся</h4>

                                        <div class="contact-info"><i class="fa fa-home"></i>



                                            <p>г. Липецк, <br>ул. Октябрьская, 61</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wpb_column vc_column_container vc_col-sm-4 vc_custom_1425691985513">
                                <div class="wpb_wrapper">
                                    <div class="luchiki-contact-info  ">
                                        <div class="contact-icon"><i class="fa fa-phone-square"></i></div>
                                        <h4>Номера телефонов</h4>

                                        <div class="contact-info">
                                            <i class="fa fa-phone"></i>
                                            <p>+7 (4742) 71 51 15</p><br>

                                            <!--<i class="fa fa-mobile"></i>
                                            <p>+7 (4742) 22 78 87</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wpb_column vc_column_container vc_col-sm-4 vc_custom_1425691992270">
                                <div class="wpb_wrapper">
                                    <div class="luchiki-contact-info  ">
                                        <div class="contact-icon"><i class="fa fa-envelope-o"></i></div>
                                        <h4>Электронный адрес</h4>

                                        <div class="contact-info"><i class="fa fa-envelope"></i>

                                            <p>sok@zdorovie48.ru</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            @if(Session::has('good'))
                                <div class="alert alert-success">
                                    {{ Session::get('good') }}
                                </div>
                            @endif
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box vc_custom_1425694368902">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">
                                    <div class="wpcf7" id="wpcf7-f272-p254-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form name="" action="/feedback" method="post" class="wpcf7-form" >
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="272">
                                                <input type="hidden" name="_wpcf7_version" value="4.0.2">
                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                 <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f272-p254-o1">
                                                <input type="hidden" name="_wpnonce" value="b9f6f611fc"></div>
                                            <div class="row contact-form-contact-us row bg-while">
                                                <div class="col-md-2 col-sm-12 contact-form-contact-us-left"><h3>Отправить нам сообщение</h3>

                                                    <p>Мы поможем вам обратным сообщением</p>

                                                    <p></p>
                                                </div>
            <div class="col-md-10 col-sm-12 contact-form-contact-us-right">
                <div class="row">
                    <div class="col-md-6 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="fio" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="ФИО*"></span>
                                                        </div>
            <div class="col-md-6 col-sm-12 contact-form-input">
                <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="Email*"></span></div>


                <div class="col-md-12 col-sm-12 contact-form-input">
                    <span class="wpcf7-form-control-wrap your-email">
                        <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="Телефон*"></span>
                </div>



                    <div class="col-md-12 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-message">
                            <textarea name="message" cols="4" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your-message" aria-required="true" aria-invalid="false" placeholder="Ваше сообщение...*"></textarea></span>
                                                        </div>
                                    <div class="col-md-12 col-sm-12 contact-form-submit">
                                                    <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit luchiki-button" id="submit">
                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            {!!csrf_field()!!}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
