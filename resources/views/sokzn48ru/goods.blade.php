@extends('sokzn48ru/ALTheader')

@section('content')
    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>
                        {{$Good['name']}}
                    </h2>
                </div>
            </div>
            <div class="wrrr"></div>
        </section>
        <main role="main" class="site-content wrapp-goods">
            <div class="page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box luchiki-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">

                                    @if($ChildGoods)
                                    <div class="row luchiki-margin-bottom-30">
                                        <div class="gallery-wrapper gallery-infinite-scroll">
                                            <div class="col-xs-12 service-wrapper">
                                                @foreach($ChildGoods as $key => $good)
                                                    <div class="gallery-item gallery-col-3 service-img">
                                                        <div class="entry-thumbnail title">
                                                            <img src="{{$good->avatar}}" alt="{{$good->name}}">

                                                            <!--Описание фотоальбома-->
                                                            <div class="entry-thumbnail-hover">
                                                                <div class="entry-hover-wrapper">
                                                                    <div class="entry-hover-inner">
                                                                        <a href="/service/{{$good->id}}" title="{{$good->name}}">
                                                                            <h5 class="class-name">{{$good->name}}</h5>
                                                                                    <span class="excerpt">
                                                                                        {{str_limit((strip_tags($good->content)), 130, '...')}}
                                                                                    </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Описание фотоальбома-->
                                                        </div>
                                                    </div>


                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    @endif


                                    <div class=" row">
                                        @if(Session::has('good'))
                                            <div class="alert alert-success">
                                                {{ Session::get('good') }}
                                            </div>
                                        @endif
                                        <div class="col-xs-4">
                                            <img src="{{$Good['avatar']}}" title="{{$Good['name']}}" alt="{{$Good['name']}}" class="img-thumbnail">
                                        </div>

                                        {!! $Good['text'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="container">




            <div class="container padding-top-35 sub-block">


                <div class="col-md-12">

                    @foreach($Comments as $comm)
                        <div class="col-xs-12">
                        <div class="entry-wrapper clearfix wrap-review">

                            <div class="entry-content-wrapper clearfix">
                                <div class="entry-content-container clearfix">

                                    <h3 class="entry-title title-comment-serv">
                                        {{$comm->fio}}
                                    </h3>

                                    <div class="entry-meta">
                                        <span class="entry-meta-date">
                                            <small><i>Размещено {{$comm->created_at}}</i></small>
                                        </span>
                                    </div>
                                    <div class="entry-excerpt">
                                        <p>
                                            {{$comm->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach

                    <form action="/service" method="post" class="wpcf7-form">

                        <div class="row contact-form-contact-us row bg-while">
                            <div class="col-md-3 col-sm-12 contact-form-contact-us-left">
                                <h3>Напишите комментарий</h3>

                                <p>нам интересно ваше мнение</p>

                                <p></p>
                            </div>
                            <div class="col-md-9 col-sm-12 contact-form-contact-us-right">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="fio" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="ФИО*"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-12 contact-form-input">
                <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="Email*"></span></div>


                                    <div class="col-md-12 col-sm-12 contact-form-input">
                    <span class="wpcf7-form-control-wrap your-email">
                        <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="Телефон*"></span>
                                    </div>



                                    <div class="col-md-12 col-sm-12 contact-form-input">
                        <span class="wpcf7-form-control-wrap your-message">
                            <textarea name="comment" cols="4" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your-message" aria-required="true" aria-invalid="false" placeholder="Ваше сообщение...*"></textarea></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 contact-form-submit">
                                        <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit luchiki-button button-sm" id="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                        <input type="hidden" name="goods" value="{{$Good['id']}}">
                        {{csrf_field()}}
                    </form>


                </div>
            </div>







        </div>
    </div>
@endsection
