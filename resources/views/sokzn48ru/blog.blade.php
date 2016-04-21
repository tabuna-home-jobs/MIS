@extends('sokzn48ru/ALTheader')
@section('content')


    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading"><h2>Новости</h2>
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

                                    <li>Новости</li>
                                </ul>
                                <div class="wpb_wrapper">
                                    <div class="latest-post-wrapper">
                                        <div class="container">
                                            <div class="row">
                                                <div class="latest-post-col-3 latest-post-no-slider latest-post-style1  ">
                                                    @foreach($News as $item)
                                                        <article id="post-82"
                                                                 class="post-82 post type-post status-publish format-standard has-post-thumbnail hentry category-new-event clearfix">
                                                            <div class="entry-wrapper clearfix">
                                                                <div class="entry-image-wrapper">
                                                                    <div class="entry-thumbnail">
                                                                        <a href="/blog/{{$item['id']}}" title="{{$item['title']}}" class="thumbnail">
                                                                            <img class="img-rounded img-responsive" src="{{$item['avatar']}}" alt="{{$item['title']}}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="entry-content-wrapper clearfix">
                                                                    <div class="entry-content-container clearfix">

                                                                        <h3 class="entry-title">
                                                                            <a href="/blog/{{$item['id']}}" rel="bookmark" title="{{$item['title']}}">
                                                                                {{$item['name']}}
                                                                            </a>
                                                                        </h3>

                                                                        <div class="entry-meta">

                                                                            <span class="entry-meta-date"><i class="fa fa-clock-o"></i> Опубликованно
                                                                                <a href="/" rel="bookmark" title="{{$item['title']}}">
                                                                                    {{$item['created_at']->diffForHumans()}}
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="entry-excerpt">
                                                                            <p>
                                                                                {{str_limit(strip_tags($item['descript']), 300, '...')}}
                                                                            </p>
                                                                        </div>
                                                                        <div class="entry-read-more">
                                                                            <a href="/blog/{{$item['id']}}" rel="bookmark" title="Read more">Читать дальше <i class="fa fa-angle-double-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    @endforeach
                                                </div>
                                            </div>
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
