@extends('luchiki48ru/ALTheader')
@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
                    <h2>Наш учитель: <span class="lastWord">{{$Spec->fio}}</span></h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content-archive wrapp-review">
            <div class="container clearfix">
                <div class="blog-wrapper">
                    <div class="blog-inner blog-single clearfix">
                        <article id="post-">
                            <div class="page-single-our-staffs">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12 our-staffs-image">

                                        <img  src="{{$Spec->avatar}}" class="img-responsive" alt="{{$Spec->fio}}" title="{{$Spec->fio}}">
                                    </div>
                                    <div class="col-md-9 col-sm-6 col-xs-12 our-staffs-contact">
                                        <h3 class="our-staffs-name">{{$Spec->fio}}</h3>

                                        <p class="our-staffs-job">
                                            {{$Spec->subname}}
                                        </p>

                                        <div class="our-staffs-phone"><p>Образование:</p>{{$Spec->obrazovanie}}</div>
                                        <div class="our-staffs-email"><p>Специализация:</p>{{$Spec->special}}</div>
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
                                <div class="cupid-call-action   content-middle">
                                    <div class="content-middle-inner">
                                        <p>Посмотреть коллег
                                            <a class="cupid-button button-lg" href="/team" target="_self">
                                                Смотреть
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
