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
                                    <p>


                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae urna eu ipsum dictum faucibus. Mauris placerat scelerisque purus id luctus. Nam sit amet arcu laoreet, pulvinar libero ac, facilisis sapien. Proin erat dolor, faucibus sit amet sagittis et, sagittis sed nulla. Fusce vel risus mauris. Nulla quis orci ornare, porta lorem id, lobortis dolor. Mauris ligula leo, iaculis ac velit ullamcorper, blandit euismod erat. Sed dictum purus sed viverra mattis. Sed ultricies odio id consectetur ultrices. Suspendisse venenatis orci nec nibh pellentesque, et malesuada lacus hendrerit. Sed et sem ante. Nullam et nunc ac massa volutpat ornare. Praesent finibus elit sem, in tristique est vestibulum id. Vivamus lobortis scelerisque turpis, non vulputate velit dignissim nec. Pellentesque varius arcu commodo rhoncus cursus. Praesent sagittis posuere odio eu sodales.

                                        Donec nec rutrum orci, ac rutrum purus. Praesent finibus malesuada ultrices. Donec imperdiet vel sem in ornare. Suspendisse gravida fringilla nisl lacinia tempor. Cras rutrum a arcu vel posuere. Nullam ex purus, faucibus sed erat nec, consequat ornare est. Sed scelerisque at purus eget faucibus. Proin vitae sapien lectus. Integer tincidunt, augue in pretium scelerisque, massa neque luctus arcu, at fringilla augue mauris a leo.
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
