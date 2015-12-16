@extends('zdorovie48ru/header')

@section('content')



    <div class="sub-page-content">


        <section class="meet-the-doctors text-center">
            <div class="container">
                <h1 class="light">Ваша <span>идеальная</span> команда</h1>

                <p class="lead">врачи первой, высшей квалификационной категории, соискатели научной степени, кандидаты
                    медицинских наук, заслуженные врачи Российской Федерации</p>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">

                    @foreach($Reviews as $key=>$value)
                        <div class="col-md-6">
                            <div class="feature">
                                <i class="pull-left feature-icon fa fa-male"></i>

                                <div class="feature-content">
                                    <h5>{{$value['fio']}}</h5>

                                    <p>{{$value['content']}}</p>
                                    <small> {{$value['created_at']}} </small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row text-center">

                    {!! $Reviews->render() !!}
                </div>
            </div>
        </section>









        <section class="appointment-sec text-center">
            <div class="container">
                <h1>Оставьте отзыв</h1>

                <p class="lead">Мы благодарны вам, за ваши слова, для нас они много значат</p>
                <div class="row">
                    <div class="col-md-6">
                        <figure><img src="/site1.ru/images/doctorrewews.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
                    </div>
                    <div class="col-md-6">

                            <form role="form" action="/reviews" method="post">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <input type="text" name="fio" max="255" placeholder="Имя" style="width: 100%;">
                                            <textarea rows="4" name="content" placeholder="Комментарий"></textarea>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-default btn-rounded pull-right" type="submit">Отправить
                                            </button>
                                        </div>
                                    </div>
                            </form>


                    </div>
                </div>
            </div>
        </section>



















    </div>


@endsection