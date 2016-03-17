@extends('stomzn48ru/header')

@section('title', $Spec['title'])
@section('description', $Spec['descript'])
@section('keywords', $Spec['tag'])
@section('avatar', $Spec['avatar'])
@section('content')

    <section id="content">
        <div class="content_wrapper">

            <div class="title_box">
                <div class="container">
                    <div class="title_wr">
                        <h1>{{$Spec->fio}}</h1>
                    </div>
                </div>
                <!--.container-->
            </div>

            <article id="post-817" class="post-817 page type-page status-publish hentry">

                <div class="container">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                            <div class="wpb_wrapper">
                                <div class="page-single-our-staffs">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12 our-staffs-image">

                                            <img  src="{{$Spec->avatar}}" class="img-responsive" alt="{{$Spec->fio}}" title="{{$Spec->fio}}">
                                        </div>
                                        <div class="col-md-9 col-sm-6 col-xs-12 our-staffs-contact">
                                            <!--<h3 class="our-staffs-name">{{$Spec->fio}}</h3>-->

                                            @if(isset($Spec->subname) && trim($Spec->subname) !== "")
                                                <p>
                                                    <span class="black">Должность: </span>
                                                    <span class="detail">{{$Spec->subname}} </span>
                                                </p>
                                            @endif

                                            @if(isset($Spec->opyt) && trim($Spec->opyt) !== "")
                                                <p>
                                                    <span class="black">Должность: </span>
                                                    <span class="detail">{{$Spec->opyt}} </span>
                                                </p>
                                            @endif

                                            @if(isset($Spec->obrazovanie) && trim($Spec->obrazovanie) !== "")
                                                <div class="our-staffs-phone"><p class="black">Образование:</p>{{$Spec->obrazovanie}}</div>
                                            @endif

                                            @if(isset($Spec->special) && trim($Spec->special) !== "")
                                                <div class="our-staffs-email"><p class="black">Специализация:</p>{{$Spec->special}}</div>
                                            @endif
                                            <div class="our-staffs-phone">
                                                <p class="black">Дни работы:</p>
                                                @if($days = unserialize($Spec->works))
                                                    @foreach($days as $day)
                                                        <span>{{$day}}; </span>
                                                    @endforeach
                                                @else
                                                    Неизвестно
                                                @endif
                                            </div>

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
                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs">
                            <div class="wpb_wrapper">
                                <div class="stm_sidebar">
                                    <style type="text/css" scoped="">
                                        .vc_custom_1441358740563 {
                                            margin-bottom: 30px !important;
                                        }    </style>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_custommenu wpb_content_element">
                                                    <aside class="widget">
                                                        <div class="widget_title"><h5>Страницы</h5></div>
                                                        <div class="menu-footer-menu-container">
                                                            <ul id="menu-footer-menu" class="menu">
                                                                {!!Menu::getLI('10','Правое')!!}
                                                            </ul>
                                                        </div>
                                                    </aside>
                                                </div>
                                                <div class="icon_button vc_custom_1441358740563">
                                                    <a target="_target" href="/stomzn48.ru/download/price.xlsx">
			<span class="media-left media-middle">
				<i style="font-size: 33px; line-height: 33px; height: 33px;" class="stm-icon stm-icon-list"></i>
			</span>
			<span class="media-body media-middle">
				<span class="text">
					Прайс лист<br><em>Скачать в xlsx</em>				</span>
			</span>
                                                    </a>
                                                </div>
                                                <aside class="widget widget_contacts wpb_content_element vc_widgets style_2">
                                                    <div class="widget_title"><h5>Контакты</h5></div>
                                                    <ul>
                                                        <li>
                                                            <div class="text"><strong>Офис</strong>

                                                                <p>Пн - Пт 8:00 - 21:00<br>
                                                                    <span class="subbclock">Сб 8:00 - 14:00</span>
                                                                </p></div>
                                                            <div class="icon"><i class="stm-icon-clock"></i></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><strong>E-mail</strong>

                                                                <p><a href="stom@zdorovie48.ru">stom@zdorovie48.ru</a></p></div>
                                                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><strong>Телефон</strong>

                                                                <p>7 (4742) 227-887<br>
                                                                </p></div>
                                                            <div class="icon"><i class="stm-icon-roundels"></i></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><strong>Адрес</strong>

                                                                <p>г. Липецк, <br>
                                                                   ул. Октябрьская 61</p></div>
                                                            <div class="icon"><i class="stm-icon-map-marker"></i></div>
                                                        </li>
                                                    </ul>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.container-->

            </article>
            <!-- #post-## --></div>

    </section>


@endsection
