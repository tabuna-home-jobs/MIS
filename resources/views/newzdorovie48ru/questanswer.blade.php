@extends('newzdorovie48ru/header')

@section('content')





        <!-- Вопрос -->
<section class="container-fluid">
    <div class="row">


        <div class="container">

            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Вопросы и ответы</h1>
                    <small>Задайте любой интересующий вас вопрос и наш специалист найдёт ответ</small>
                </div>



                <div class="row">





                        <div class="col-xs-12">


                            <div class="mansory">

                                <div class="row">

                                    <ul class="medicom-feature-list list-inline text-left" id="accordion" role="tablist"
                                        aria-multiselectable="true">

                                        @foreach($QuestAnswers as $QA)
                                            <li><i class="item fa fa-user medicom-check pull-left"></i>

                                                <div class="panel">
                                                    <div class="panel-heading" role="tab" id="heading-answer-{{$QA->id}}">


                                                        <div class="h4 m-t-sm m-b-sm panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                               href="#collapse-answer-{{$QA->id}}" aria-expanded="true"
                                                               aria-controls="collapse-answer-{{$QA->id}}">
                                                                {{$QA->questions}}
                                                            </a>


                                                            <p class="text-right">
                                                                <small class="light bordered main-title text-right"> {{$QA->getCategory->name or ''}}
                                                                    <br>{{$QA->fio}} </small>
                                                            </p>

                                                        </div>


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
</div>

                        </div>





                        <div class="row">
                            <div class="text-center m-t-lg m-b-lg">
                                <div class="row text-center">
                                    {!! $QuestAnswers->render() !!}
                                </div>
                            </div>
                        </div>


                    </div>





                </div>













                <div class="panel">
                    <div class="wrapper-lg">
                        <div class="row">




                            <div class="col-md-6">
                                <h2>Напиши и узнаешь</h2>
                                <hr>

                                <div class="appointment-form clearfix">
                                    <form action="/questanswer" method="post">

                                        <div class="form-group">

                                            <label>Как Вас зовут?</label>
                                        <input type="text" class="form-control rounded" placeholder="ФИО" required name="fio" style="width: 98%">
                                            </div>

                                        <div class="form-group">

                                            <label>Как Вас зовут?</label>
                                        <input type="email" class="form-control rounded" name="email" required placeholder="Email">
                                            </div>

                                        <div class="form-group">

                                            <label>Как Вас зовут?</label>
                                        <input name="phone" class="form-control rounded" required placeholder="Номер телефона" type="text" data-mask="+ 9-999-999-99-99">
                                            </div>

                                        <div class="form-group">

                                            <label>Как Вас зовут?</label>
                                        <textarea name="questions" class="form-control rounded" rows="5" placeholder="Ваш вопрос"></textarea>
                                            </div>

                                        <div class="form-group">
                                        <input type="hidden" class="form-control rounded" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-default btn-void-primary" value="Отправить">
                                            </div>
                                    </form>
                                </div>




                            </div>
                            <div class="col-md-6">
                                <h2>Уверенность и  качество</h2>
                                <hr>
                                <div class="feature">
                                    <i class="pull-left feature-icon fa fa-user-md"></i>
                                    <div class="feature-content">
                                        <div class="h5 m-t-sm m-b-sm"><a href="/team">Наши специалисты</a></div>


                                        <p>Ответственно используют проверенные и надежные технологии,
                                            постоянно работают над внедрением инноваций и
                                            добиваются положительных результатов в каждом конкретном случае с каждым конкретным клиентом.</p>

                                        <a href="/team"><dfn>- Перейти</dfn></a>
                                    </div>
                                </div>
                                {{--
                                <div class="feature">
                                    <i class="pull-left feature-icon fa fa-book"></i>
                                    <div class="feature-content">
                                        <h5><a href="/medencyclopedia">Энциклопедия</a></h5>
                                        <p>В нашей энциклопедии здоровья вы можете ознакомится с распространёнными проблемами</p>
                                        <a href="/medencyclopedia"><dfn>- Перейти</dfn></a>
                                    </div>
                                </div>
                                --}}

                                <div class="feature">
                                    <i class="pull-left feature-icon fa fa-phone-square"></i>
                                    <div class="feature-content">
                                        <div class="h5 m-t-xs m-b-xs"><a href="/appointment">Записаться на приём</a></div>

                                        <p>Сервис «Онлайн запись на прием» предоставляет возможность записаться на прием в удобное
                                            время не выходя из дома.</p>
                                        <a href="/#main-appointments-section"><dfn>-  Перейти</dfn></a>
                                    </div>
                                </div>
                            </div>






                        </div>

                    </div>
                </div>












            </div>




        </div>
    </div>
</section>
<!-- Ответ -->





























@endsection
