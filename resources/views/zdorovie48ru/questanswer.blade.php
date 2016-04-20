@extends('zdorovie48ru/header')

@section('content')



    <section data-stellar-background-ratio="0.3" class="sub-page-banner sub-page-banner-med text-center">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="entry-title">Вопросы и ответы</h1>
            <p>Задайте любой интересующий вас вопрос и наш специалист найдёт ответ</p>
        </div>
    </section>



    <div class="sub-page-content">


        <section class="after-booking-sec text-center no-bg">
            <div class="container">

                <ul class="medicom-feature-list list-inline text-left" id="accordion" role="tablist"
                    aria-multiselectable="true">

                    @foreach($QuestAnswers as $QA)
                        <li><i class="fa fa-user medicom-check pull-left"></i>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-answer-{{$QA->id}}">


                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse-answer-{{$QA->id}}" aria-expanded="true"
                                           aria-controls="collapse-answer-{{$QA->id}}">
                                            {{$QA->questions}}
                                        </a>


                                        <p class="text-right">
                                            <small class="light bordered main-title text-right"> {{$QA->getCategory->name or ''}}
                                                <br>{{$QA->fio}} </small>
                                        </p>

                                    </h4>


                                </div>

                                <div id="collapse-answer-{{$QA->id}}" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading-answer-{{$QA->id}}">
                                    <div class="panel-body blog-content">
                                        {!! nl2br(e($QA->answer)) !!}
                                        <p class="text-right">
                                            <small>С уважением и заботой, Здоровье Нации!  {{--$QA->getDoctor->fio or ''--}}</small>
                                            <small><br>
                                                <date>{{$QA->updated_at->diffForHumans()}}</date>
                                            </small>
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </section>


        {!! $QuestAnswers->render() !!}












        <div class="container padding-top-35">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="light bordered">Напиши и узнаешь</h2>

                    <div class="appointment-form clearfix">
                        <form action="/questanswer" method="post">
                            <input type="text" placeholder="ФИО" required name="fio" style="width: 98%">
                            <input type="email" name="email" required placeholder="Email">
                            <input name="phone" required placeholder="Номер телефона" type="text" data-mask="+ 9-999-999-99-99">
                            <textarea name="questions" rows="5" placeholder="Ваш вопрос"></textarea>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-default btn-rounded" value="Отправить">
                        </form>
                    </div>




                </div>
                <div class="col-md-6">
                    <h2 class="light bordered">Уверенность и  качество</h2>
                    <div class="feature">
                        <i class="pull-left feature-icon fa fa-user-md"></i>
                        <div class="feature-content">
                            <h5><a href="/team">Наши специалисты</a></h5>


                            <p>Ответственно используют проверенные и надежные технологии,
                                постоянно работают над внедрением инноваций и
                                добиваются положительных результатов в каждом конкретном случае с каждым конкретным клиентом.</p>

                            <a href="/team"><dfn>- Перейти</dfn></a>
                        </div>
                    </div>
                    <!--
                    <div class="feature">
                        <i class="pull-left feature-icon fa fa-book"></i>
                        <div class="feature-content">
                            <h5><a href="/medencyclopedia">Энциклопедия</a></h5>
                            <p>В нашей энциклопедии здоровья вы можете ознакомится с распространёнными проблемами</p>
                            <a href="/medencyclopedia"><dfn>- Перейти</dfn></a>
                        </div>
                    </div>
                    -->
                    <div class="feature">
                        <i class="pull-left feature-icon fa fa-phone-square"></i>
                        <div class="feature-content">
                            <h5><a href="/appointment">Записаться на приём</a></h5>

                            <p>Сервис «Онлайн запись на прием» предоставляет возможность записаться на прием в удобное
                                время не выходя из дома.</p>
                            <a href="/appointment"><dfn>-  Перейти</dfn></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>


@endsection