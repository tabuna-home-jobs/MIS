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
                                <p class="text-center">Задайте любой интересующий вас вопрос и наш специалист найдёт ответ</p>
                                <div class="sub-page-content">

                                    <div class="faq-content">
                                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group faq-panel">
                                            @foreach($QuestAnswers as $QA)
                                            <div class="panel">
                                                <div id="headingOne" role="tab" class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a aria-controls="heading-answer-{{$QA->id}}" aria-expanded="true" href="#heading-answer-{{$QA->id}}" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                            {{$QA->questions}}
                                                            <p class="text-right">
                                                                <small class="light bordered main-title text-right">
                                                                    {{$QA->getCategory->name or ''}}
                                                                    <br>{{$QA->fio}} </small>
                                                            </p>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div aria-labelledby="heading-answer-{{$QA->id}}" role="tabpanel" class="panel-collapse collapse" id="heading-answer-{{$QA->id}}">
                                                    <div class="panel-body">
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
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
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
