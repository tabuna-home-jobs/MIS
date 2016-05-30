@extends('luchiki48ru/header')

@section('content')

    <div class="sub-page-content">

        <h1 class="blueText center">Вопросы и ответы</h1>
        @if(Session::has('good'))
            <div class="alert alert-success">
                {{ Session::get('good') }}
            </div>
        @endif

        <div class="container padding-top-35">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Вопросы и ответы</li>
            </ul>
        </div>
        <div class="padding-top-35 after-booking-sec text-center">

            <ul class="medicom-feature-list list-inline text-left" id="accordion" role="tablist"
                aria-multiselectable="true">

                @foreach($QuestAnswers as  $key =>$QA)
                    <li>

                        <div class="container panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-answer-{{$QA->id}}">
                                <i class="fa fa-question medicom-check pull-left hidden-xs"></i>

                                <h4 class="panel-title">
                                   <!-- <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-answer-{{$QA->id}}" aria-expanded="true"
                                       aria-controls="collapse-answer-{{$QA->id}}">
                                        {{$QA->questions}}
                                    </a>-->

                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-answer-{{$QA->id}}" aria-expanded="true"
                                       aria-controls="collapse-answer-{{$QA->id}}">
                                        {{$QA->questions}}
                                    </a>

                                    <p class="text-right">
                                        <div class="text-right black">
                                            <!--{{$QA->getCategory->name or ''}}-->
                                            <br>- {{$QA->fio}}
                                        </div>
                                    </p>

                                </h4>


                            </div>

                            <div id="collapse-answer-{{$QA->id}}" class="panel-collapse" role="tabpanel"
                                 aria-labelledby="heading-answer-{{$QA->id}}">
                                <div class="panel-body blog-content">
                                    {{$QA->answer}}
                                    <p class="text-right">
                                        - {{$QA->getDoctor->fio or ''}}
                                        <!--<small><br>
                                            <date>{{$QA->updated_at->diffForHumans()}}</date>
                                        </small>-->
                                    </p>
                                </div>
                            </div>


                        </div>
                    </li>
                    @if( ($key+1) == floor( count($QuestAnswers)/2 ) )
                        <div class="quest-form white">
                            <h2 class="blueBg center  feedHead">Напиши и узнаешь</h2>
                            <div class="container">
                                <div class="col-md-6">
                                    <p class="big textst">
                                        Здесь Вы можете задать свой вопрос
                                    </p>
                                    <!--<h2 class="light bordered">Уверенность и  качество</h2>
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
                                    </div>-->
                                </div>

                                <div class="col-md-6">


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
                                            <input type="submit" class="btn btn-primary" value="Отправить">
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
                @if(count($QuestAnswers)<2)

                        <div class="quest-form white">
                            <h2 class="blueBg center  feedHead">Напиши и узнаешь</h2>
                            <div class="container">
                                <div class="col-md-6">
                                    <p class="big textst">
                                        Здесь Вы можете задать свой вопрос
                                    </p>
                                    <!--<h2 class="light bordered">Уверенность и  качество</h2>
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
                                    </div>-->
                                </div>

                                <div class="col-md-6">


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
                                            <input type="submit" class="btn btn-primary" value="Отправить">
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                 @endif


            </ul>
        </div>



        {!! $QuestAnswers->render() !!}

    </div>


@endsection
