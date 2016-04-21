@extends('sokzn48ru/ALTheader')

@section('content')




    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>
                        Вопросы и ответы
                    </h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>


        <main role="main" class="site-content">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box luchiki-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <ul class="breadcrumb">
                                    <li><a href="/">Главная</a></li>
                                    <li>Вопросы и ответы</li>
                                </ul>
                                <div class="wpb_wrapper">

                                    <div class="container padding-top-35">
                                        <div class="row">
                                            @if(Session::has('good'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('good') }}
                                                </div>
                                            @endif
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach($QuestAnswers as $QA)


        <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$QA->id}}" aria-expanded="true" aria-controls="collapseOne{{$QA->id}}">
                        {{$QA->fio}} спросил(а): {{$QA->questions}}
                    </a>
                </h4>
            </div>
            <div id="collapseOne{{$QA->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    {{$QA->answer}}
                </div>
            </div>
        </div>

                                            @endforeach
    </div>


                                            {!! $QuestAnswers->render() !!}

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>




    <div class="container">



        <div class="container padding-top-35 sub-block">

                <div class="col-md-12">

                    <form  action="/questanswer" method="post" class="wpcf7-form">

                        <div class="row contact-form-contact-us row bg-while">
                            <div class="col-md-3 col-sm-12 contact-form-contact-us-left">
                                <h3>Задайте нам вопрос</h3>

                                <p>мы ответим максимально развернуто</p>

                                <p></p>
                            </div>
                            <div class="col-md-9 col-sm-12 contact-form-contact-us-right">
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
                            <textarea name="questions" cols="4" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your-message" aria-required="true" aria-invalid="false" placeholder="Ваше сообщение...*"></textarea></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 contact-form-submit">
                                        <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit luchiki-button" id="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>


                </div>
            </div>







        </div>

    </div>


@endsection
