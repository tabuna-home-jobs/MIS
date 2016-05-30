@extends('stomzn48ru/header')

@section('content')

    <section id="content">
        <div class="content_wrapper">

            <div class="title_box">
                <div class="container">
                    <div class="title_wr">
                        <h1>НАШИ СПЕЦИАЛИСТЫ</h1>
                    </div>
                </div>
                <!--.container-->
            </div>

            <article id="post-817" class="post-817 page type-page status-publish hentry">

                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li>Специалисты</li>
                    </ul>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                            <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <div class="row inline-block-grids padding-top-35">
                                   {{--<div class="col-sm-12 col-xs-12 col-md-12 of-canvas-xs  padding-top-35">

                    <nav class="primary-albums clearfix">
                        <ul class="list-group specNav">
                            <li>
                                <a style="z-index: 99" href="/team" class="list-group-item @if(!isset($id))active @endif">Все Специалисты</a>
                            </li>
                            @foreach($SpCat as $album)
                                            <li>
                                                <a class="list-group-item @if(isset($id) && $id==$album->id)active @endif"
                                   href="/team?catspec={{$album['id']}}">{{$album->name}}</a>
                            </li>
                            @endforeach

                                            </ul>
                                        </nav>
                                    </div>--}}
                                    <div class="col-sm-12 font-size-0 padding-top-35">


                                        @foreach($Specialisty as $key => $spec)
                                            <div class="doctors col-sm-6 col-md-6 col-xs-12 padding-bottom-60 clearfix">
                                                <div class="doctors-img col-sm-5 col-md-5 col-xs-12 ">
                                                    <a href="/team/{{$spec['id']}}">
                                                        <img src="{{$spec->avatar}}"  alt="{{$spec->fio}}" title="{{$spec->fio}}">
                                                    </a>

                                                </div>
                                                <div class="doctors-detail col-sm-7 col-md-7 col-xs-12 ">
                                                    <a class="specName" href="/team/{{$spec['id']}}">
                                                        <h4>{{$spec->fio}}<span class="text-center">{{$spec->subname}}</span></h4>
                                                    </a>

                                                    @if(isset($spec->opyt) && trim($spec->opyt) !== "")
                                                        <p>
                                                            <span class="heading">Должность: </span>
                                                            <br>
                                                            <span class="detail">{{str_limit($spec->opyt, 50, '...')}} </span>
                                                        </p>
                                                    @endif





                                                    <a href="/team/{{$spec['id']}}" class="moreBtn">Подробнее</a>
                                                </div>
                                            </div>
                                            @if(($key+1) % 2 == 0)
                                                <div class="clearfix"></div>
                                            @endif
                                        @endforeach
                                    </div>




                                </div>
                                <div class="row text-center">
                                    {!! $Specialisty->appends(\Input::except('page'))->render() !!}
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
    <script>
        var resized = function () {

            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                height_this > height ? height = height_this:'';
            });

            $('.doctors-detail').height(height);
        };



        $(window).on('load',function(){
            var height = 0;
            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.doctors-detail').height(height);
        });

        $(window).on('resize',function(){

            $('.doctors-detail').css('height','auto');
            var height = 0;
            $('.doctors-detail').each(function(){
                var height_this = $(this).height();
                if(height_this > height){
                    height = height_this
                }

            });


            $('.doctors-detail').height(height);
        });

    </script>

@endsection



    
    

