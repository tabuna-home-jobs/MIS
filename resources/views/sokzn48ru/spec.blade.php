@extends('sokzn48ru/ALTheader')
@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>Специалист: <span class="lastWord">{{$Spec->fio}}</span></h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box luchiki-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12 our-staffs-image">

                                            <img  src="{{$Spec->avatar}}" class="img-responsive" alt="{{$Spec->fio}}" title="{{$Spec->fio}}">
                                        </div>
                                        <div class="col-md-9 col-sm-6 col-xs-12 our-staffs-contact">
                                            <h3 class="our-staffs-name">{{$Spec->fio}}</h3>


                                            @if(isset($Spec->opyt) && trim($Spec->opyt) !== "" )
                                            <div class="our-staffs-phone"><p>Должность:</p>{{$Spec->opyt}}</div>
                                            @endif


                                            @if(isset($Spec->subname) && trim($Spec->subname) !== "" )
                                            <div class="our-staffs-phone"><p>Квалификация:</p>{{$Spec->subname}}</div>
                                            @endif

                                            @if(isset($Spec->obrazovanie) && trim($Spec->obrazovanie) !== "" )
                                            <div class="our-staffs-phone"><p>Образование:</p>{{$Spec->obrazovanie}}</div>

                                            @endif

                                            @if(isset($Spec->special) && trim($Spec->special) !== "" )
                                            <div class="our-staffs-email"><p>Специализация:</p>{{$Spec->special}}</div>
                                            @endif

                                            @if(isset($Spec->napravlenie) && trim($Spec->napravlenie) !== "" )
                                                <div class="our-staffs-email"><p>Направление:</p>{{$Spec->napravlenie}}</div>
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
                                    <div class="luchiki-call-action   content-middle">
                                        <div class="content-middle-inner">
                                            <p>Посмотреть коллег
                                                <a class="luchiki-button button-lg" href="/team" target="_self">
                                                    Смотреть
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection

