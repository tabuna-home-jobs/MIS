@extends('sokzn48ru.app')
@section('content')


    <section class="well page-bg well-lg blog-bg text-white m-b-none">
        <div class="container text-center text-middle">
            <div class="lead">
                <h2>
                    Наш учитель: <span class="lastWord">{{$Spec->fio}}</span>
                </h2>

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
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12 our-staffs-image">

                                        <img  src="{{$Spec->avatar}}" class="img-responsive" alt="{{$Spec->fio}}" title="{{$Spec->fio}}">
                                    </div>
                                    <div class="col-md-9 col-sm-6 col-xs-12 our-staffs-contact">
                                        <!--<h3 class="our-staffs-name">{{$Spec->fio}}</h3>-->

                                        @if(isset($Spec->subname) && trim($Spec->subname) !== "")
                                            <p>
                                                <span class="heading">Должность: </span>
                                                <span class="detail">{{$Spec->subname}} </span>
                                            </p>
                                        @endif

                                        @if(isset($Spec->opyt) && trim($Spec->opyt) !== "")
                                            <p>
                                                <span class="heading">Должность: </span>
                                                <span class="detail">{{$Spec->opyt}} </span>
                                            </p>
                                        @endif

                                        @if(isset($Spec->obrazovanie) && trim($Spec->obrazovanie) !== "")
                                            <div class="our-staffs-phone"><p>Образование:</p>{{$Spec->obrazovanie}}</div>
                                        @endif

                                        @if(isset($Spec->special) && trim($Spec->special) !== "")
                                            <div class="our-staffs-email"><p>Специализация:</p>{{$Spec->special}}</div>
                                        @endif
                                        <div class="our-staffs-phone">
                                            <p>Дни работы:</p>
                                            @if($days = unserialize($Spec->works))
                                                @foreach($days as $day)
                                                    <span>{{$day}}; </span>
                                                @endforeach
                                            @else
                                                Неизвестно
                                            @endif
                                        </div>
                                        <!-- Социальные сети етого педагога
                                        <div class="our-staffs-social">
                                            <ul>
                                                <li><a href="http://facebook.com" class="facebook" title="Facebook">
                                                        <i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="http://twiter.com" class="twitter" title="Twitter">
                                                        <i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="http://google.com" class="google" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="http://linked.com" class="linkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <div class="our-staffs-content">
                                    <p>
                                        {{$Spec->about}}
                                    </p>
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
