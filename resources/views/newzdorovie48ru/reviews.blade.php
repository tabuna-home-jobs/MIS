@extends('newzdorovie48ru/header')

@section('content')





        <!-- Отзывы -->
<section class="container-fluid">
    <div class="row">


        <div class="container">


            <div class="app-content-body ">


                <div class="page-header">
                    <h1 class="font-thin m-b">Отзывы</h1>
                </div>

                <!-- Хлебные крошки -->
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li class="active">Отзывы</li>
                </ol>
                <!-- Хлебные крошки -->


                <div class="wrapper-md">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="mansory">

                                <div class="row">



                                    @foreach($Reviews as $key=>$value)


                                    <div class="item">
                                        <div class="panel wrapper-md b">
                                            <p class="text-center">
                                                <b>{{$value['fio']}}</b>
                                            </p>
                                            <p class="text-justify">
                                                <i class="fa fa-quote-left  fa-pull-left text-success" aria-hidden="true"></i>
                                                {{$value['content']}}
                                                <i class="fa fa-quote-right  fa-pull-right text-success" aria-hidden="true"></i>
                                            </p>

                                            <p class="text-right">
                                                <small><i class="fa fa-clock-o"></i> {{$value['created_at']->toDateString()}}</small>
                                            </p>
                                        </div>
                                    </div>

                                @endforeach






                                </div>


                            </div>





                            <div class="text-center m-t-md m-b-md">

                                {!! $Reviews->render() !!}
                            </div>




                        </div>

                    </div>
                </div>




                <div class="page-header">
                    <h2 class="font-thin m-b">Оставьте отзыв. <small>Мы благодарны вам, за ваши слова, для нас они много значат</small></h2>
                </div>

                <div class="panel">
                <div class="wrapper-md">


                    <div class="row">
                        <div class="col-md-5">


                            <div class="h4 text-dark font-bold m-b-lg">С Вами мы становимся лучше!</div>
                            <ul class="list-unstyled  m-t-xl">
                                <li>
                                    <i class="fa fa-check pull-left text-lg m-r m-t-sm text-success "></i>
                                    <p class="clear m-b-lg text-justify"><strong>Наши специалисты</strong>
                                        ответственно используют проверенные и надежные технологии, постоянно работают над внедрением инноваций и добиваются положительных результатов в каждом конкретном случае с каждым конкретным клиентом.
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-check pull-left text-lg m-r m-t-sm text-success"></i>
                                    <p class="clear m-b-lg"><strong>Постоянная работа</strong> над качеством услуг, позволяет не разочаровывать наших клиентов</p>
                                </li>
                                <li>
                                    <i class="fa fa-check pull-left text-lg m-r m-t-sm text-success"></i>
                                    <p class="clear m-b-lg"><strong>Постоянная работа</strong> над качеством услуг, позволяет не разочаровывать наших клиентов</p>
                                </li>
                            </ul>



                        </div>
                        <div class="col-md-7">

                            <form role="form"  class="form-horizontal" action="/reviews" method="post">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Как Вас зовут?</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="fio" max="255" class="form-control rounded" placeholder="Имя">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-4 control-label">Какие впечатления?</label>
                                            <div class="col-sm-8">
                                                <textarea rows="10" name="content" placeholder="Комментарий"  class="form-control rounded"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-default btn-void-primary pull-right" type="submit">Отправить
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>


                </div>
                    </div>


            </div>


        </div>
    </div>
</section>
<!-- Отзывы -->



@endsection
