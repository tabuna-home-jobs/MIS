@extends('sokzn48ru/ALTheader')
@section('content')

    <div id="wrapper-content">
        <section class="page-title-wrapper">
            <div class="container clearfix">
                <div class="luchiki-heading">
                    <h2>Результаты поиска
                        @if($query)
                        по запросу: {{$query}}
                        @endif
                    </h2>
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
                                    <li>Поиск</li>
                                </ul>
                                <div class="wpb_wrapper">


                                    <div class="wrapper-md">
                                    @if($query)

                                        <ul class="list-group list-group-alt list-group-lg no-borders pull-in m-b-none">

                                        @foreach($search as $key =>$value)


                                            @foreach($value as $text)


                                                    <li class="list-group-item">
                                                        @if(isset($text->avatar))
                                                        <a href="/{{$text->SlugName . '/' . $text->id}}" class="pull-left thumb-md m-r">
                                                            <img src="{{$text->avatar}}" alt="{{$text->title}}">
                                                        </a>
                                                        @endif

                                                        <div class="clear">
                                                            <a href="/{{$text->SlugName . '/' . $text->id}}" class="h4 text-primary m-b-sm block">{{$text->name}}</a>

                                                            <div>
                                                                {{str_limit(strip_tags($text->content), 300, '...')}}
                                                            </div>
                                                        </div>
                                                    </li>
                                            @endforeach


                                        @endforeach

                                        </ul>

                                        @else
                                        Пустой запрос
                                        @endif


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
