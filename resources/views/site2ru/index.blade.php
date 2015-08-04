@extends('site2ru/header')

@section('content')









    <div class="overlay-none">
        <div class="container xsx-width">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="vc_col-sm-12 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span>
                        </div>

                        <div class="heading_e"><h3>Awesome Theme for Medical, Hospital and Health Websites</h3>

                            <p>A perfect way to show your hospital services</p><h4><img
                                        src="/site2.ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="vc_col-sm-3 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="mef-services">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-shield fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Cardio Monitoring</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p></div>
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
                                        <div class="describe"><h4>Medical Treatment</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p></div>
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
                                        <div class="describe"><h4>Emergency Help</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p></div>
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
                                        <div class="describe"><h4>First Aid</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p></div>
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
            <div class="heading_e"><h3>Awesome Theme for Medical, Hospital and Health Websites</h3>

                <p>A perfect way to show your hospital services</p><h4><img src="/site2.ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
            </div>
        </div>


        <div class="container xsx-width">
            <div class="row alternate-divs">


                <!-- ===== Begin Blog blocks ===== -->

                <!-- ===== Begin Thumbnails ===== -->

                @foreach($getNews as $key => $value)


                <div class="col-md-4">


                    <div class="elements_news_c">
                        <div class="thumbnail news_c">
                            <img width="400" height="266"
                                 src="{{$value['avatar']}}"
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
                    <div class="wpb_wrapper">
                        <div class="heading_e"><h3>Boxes Style 4</h3>

                            <p>A perfect way to show your hospital services</p><h4><img
                                        src="/site2.ru/wp-content/themes/medic-final/assets/img/heading.png" alt="heading"></h4>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1409824426179">
                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-phone fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Emergy Case</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p><a
                                                    href="index.html%3Fp=207.html#">Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-calendar-o fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Doctors Timetables</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p><a
                                                    href="index.html%3Fp=207.html#">Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-4 wpb_column vc_column_container">
                                <div class="wpb_wrapper">
                                    <div class="service_white">
                                        <div class="icon">
                                            <div class="icon-1"><i class="fa fa-phone fa-lg"></i></div>
                                            <div class="icon-2"><i class="fa fa-comments fa-inverse fa-lg"></i></div>
                                        </div>
                                        <div class="describe"><h4>Free Online Consultation</h4>

                                            <p>Pellentesque ligula odio, tempor sit amet fringilla vitae, pulvinar
                                                ullamcorper quamenatibus et magnis dis parturient montes nasce</p><a
                                                    href="index.html%3Fp=207.html#">Read More</a></div>
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