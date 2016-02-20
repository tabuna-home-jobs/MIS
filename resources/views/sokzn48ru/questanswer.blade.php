@extends('sokzn48ru.app')


@section('content')



    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h1>Вопросы и ответы</h1>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="wrapper-md">
            <div class="row">
                <div class="col-sm-9">
                    <div class="blog-post">
                        <div class="panel">
                            <div class="wrapper-lg">
                                <p>Задайте любой интересующий вас вопрос и наш специалист найдёт ответ</p>
                                <div class="sub-page-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="light bordered">Напиши и узнаешь</h2>
                                            <div class="appointment-form clearfix">
                                                <form action="/questanswer" method="post">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ФИО" required name="fio">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" required placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone" required placeholder="Телефон">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="questions" class="form-control" placeholder="Ваш вопрос"></textarea>
                                                    </div>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-info" value="Отправить">
                                                </form>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <h2 class="light bordered">Уверенность и  качество</h2>
                                            <div class="feature">
                                                <i class="pull-left feature-icon fa fa-user-md"></i>
                                                <div class="feature-content">
                                                    <h5><a href="/team">Наши специалисты</a></h5>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>
                                                    <a href="/team"><dfn>- Перейти</dfn></a>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <i class="pull-left feature-icon fa fa-phone-square"></i>
                                                <div class="feature-content">
                                                    <h5><a href="/feedback">Записаться на приём</a></h5>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>
                                                        <a href="/feedback"><dfn>-  Перейти</dfn></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row after-booking-sec">
                                        <ul class="medicom-feature-list list-inline text-left" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            @foreach($QuestAnswers as $QA)
                                                <li>
                                                    <i class="fa fa-user medicom-check pull-left"></i>
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
                                                                {{$QA->answer}}
                                                                <p class="text-right">
                                                                    <small>С уважением {{$QA->getDoctor->fio or ''}}</small>
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    @if(isset($LastNews))
                        @include('sokzn48ru._layouts.newslsit',['listnews' => $LastNews])
                    @endif
                </div>
            </div>
        </div>
    </section>


@endsection
