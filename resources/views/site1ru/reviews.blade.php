@extends('site1ru/header')

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

                <div class="row">

                    {!! $Reviews->render(); !!}
                </div>
            </div>
        </section>


    </div>


@endsection