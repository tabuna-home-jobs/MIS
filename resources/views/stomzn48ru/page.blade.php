@extends('stomzn48ru/header')

@section('content')

    <section id="content">
        <div class="content_wrapper">

            <div class="title_box">
                <div class="container">
                    <div class="title_wr">
                        <h1>{{$Page['name']}}</h1>
                    </div>
                </div>
                <!--.container-->
            </div>

            <article id="post-817" class="post-817 page type-page status-publish hentry">

                <div class="container">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">

                                        <p class="p1">
                                            <span class="s1">
                                                {!! $Page['content'] !!}
                                            </span>
                                        </p>

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
                                                    <a target="_self" href="#">
			<span class="media-left media-middle">
				<i style="font-size: 33px; line-height: 33px; height: 33px;" class="stm-icon stm-icon-list"></i>
			</span>
			<span class="media-body media-middle">
				<span class="text">
					Прайс лист<br><em>2.3 mb, PDF</em>				</span>
			</span>
                                                    </a>
                                                </div>
                <aside class="widget widget_contacts wpb_content_element vc_widgets style_2">
                    <div class="widget_title"><h5>Контакты</h5></div>
                    <ul>
                        <li>
                            <div class="text"><strong>Оффис</strong>

                                <p>Пн - Пт 8.00 - 17.00<br>
                                   Сб - Вс 9:00 - 14:00</p></div>
                            <div class="icon"><i class="stm-icon-clock"></i></div>
                        </li>
                        <li>
                            <div class="text"><strong>E-mail</strong>

                                <p><a href="mailto:stomzn48@yandex.ru">stomzn48@yandex.ru</a></p></div>
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

                                <p>г. Липецк, ул.Советская,<br>
                                   д. 66; ул.Фрунзе, д.14</p></div>
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
