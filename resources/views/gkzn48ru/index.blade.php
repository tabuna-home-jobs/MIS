@extends('gkzn48ru/header')

@section('content')









    <div class="overlay-none">
        <div class="container xsx-width">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="vc_col-sm-12 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span>
                        </div>

                        <div class="heading_e"><h3> Группа компаний "Здоровье нации"</h3>


                            <p>Многопрофильная компания, оказывающая широкий спектр услуг.</p>

                            <h4><img
                                        src="/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="vc_col-sm-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="mef-services">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-shield fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Комфорт и безопасность для детей и родителей</h4>

                                            <p>Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное. Мы несем идеи здорового образа жизни.</p></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="mef-services">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-heart fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Индивидуальный подход</h4>

                                            <p>Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное. Мы несем идеи здорового образа жизни.</p></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="mef-services">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-star fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Качество</h4>

                                            <p>Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное. Мы несем идеи здорового образа жизни.</p></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="mef-services">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-medkit fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Современное медицинское оборудование</h4>

                                            <p>Мы помогаем нашим клиентам обрести здоровье – физическое, психологическое и духовное. Мы несем идеи здорового образа жизни.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- ================================ -->
    <!-- ========== Begin Blog Style ========== -->
    <!-- ================================ -->
    <div class="blogMasonry">

        <div class="col-xs-12">
            <div class="heading_e"><h3>Новости и события медицинского центра "Здоровье Нации"</h3>
                <p>Последнии записи центров</p><h4><img src="/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
            </div>
        </div>


        <div class="container xsx-width">
            <div class="row alternate-divs">


                <!-- ===== Begin Blog blocks ===== -->

                <!-- ===== Begin Thumbnails ===== -->

                @foreach(newsOnMain::getNews(3,6) as $key => $value)

                <div class="col-md-4">


                    <div class="elements_news_c">
                        <div class="thumbnail news_c">
                            <img  src="{{$value['avatar']}}"
                                 class="attachment-blog_masonery wp-post-image" alt="Dental checkup"/></div>
                        <div class="caption_news_c news_1">
                            <div class="icon">
                                <div class="icon-1">
                                    <i class="fa fa-phone fa-lg"></i>
                                </div>
                                <div class="icon-2">
                                    <!-- ===== You can change the icon just below ===== -->
                                    <i class="fa fa-pencil fa-lg"></i>
                                </div>
                            </div>
                            <h4><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h4>

                            <p> {{str_limit((strip_tags($value['content'])), $limit = 130, $end = '...')}}</p>

                        </div>
                    </div>

                </div>
                    @endforeach



                            <!-- ===== End Thumbnails ===== -->



                <!-- ===== End Blog blocks ===== -->
            </div>
            <!-- ===== Begin Pagination ===== -->
            <div class="row">
                <!-- ========== START PAGINATION ========== -->
                <!-- ========== END PAGINATION ========== -->
            </div>
            <!-- ===== End Pagination ===== -->
        </div>
    </div>
    <!-- ================================ -->
    <!-- ========== End Blog Style ========== -->
    <!-- ================================ -->
















    <div class="overlay-white vc_custom_1409824246057">
        <div class="container xsx-width">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="vc_col-sm-12 wpb_column vc_column_container">
                    <div class="wpb_wrapper p-t-20">
                        <div class="heading_e"><h3>Помощь</h3>

                            <p>Воспользуйтесь наши услугами прямо сейчас</p><h4><img
                                        src="/gkzn48ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1409824426179">
                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-hospital-o fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-hospital-o fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Удобное расположение</h4>

                                            <p>Наши центры не только удобно территориально расположены, но оснащены современными диагностическими оборудованем</p><a
                                                    href="/feedback">Подробнее</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-user-md fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-user-md fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Запись на приём</h4>

                                            <p>С помощью интернет-регистратуры можно
                                                записаться на прием к врачу в удобное
                                                для вас время.</p><a
                                                    href="/appointment">Подробнее</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-comments fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-comments fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Бесплатная консультация</h4>

                                            <p>Профильные врачи, доступные круглосуточно из любой точки мира. Нужен только интернет и компьютер или смартфон.</p><a
                                                    href="#">Подробнее</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection