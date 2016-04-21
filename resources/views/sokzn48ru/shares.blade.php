@extends('sokzn48ru/ALTheader')
@section('content')


    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading"><h2>Акции</h2>
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
                                <ul class="breadcrumb">
                                    <li><a href="/">Главная</a></li>
                                    <li>Акции</li>
                                </ul>
                                <div class="wpb_wrapper">
                                    @foreach($Shares as $item)
                                        <div class="col-md-4">
                                            <div>
                                                <h3>{{$item['name']}}</h3>
                                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                                <div class="seeall"><a href="/shares/{{$item['id']}}" ><span class="glyphicon glyphicon-eye-open"></span> Посмотреть</a></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
