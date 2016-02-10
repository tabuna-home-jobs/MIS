@extends('luchiki48ru/ALTheader')

@section('content')
    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="cupid-heading">
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
                        <div class="vc_row wpb_row vc_row-fluid bg-content-box cupid-margin-top-35 bg-while">
                            <div class="about-us-padding wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">
                                    <div class=" row">
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
    </div>
@endsection
