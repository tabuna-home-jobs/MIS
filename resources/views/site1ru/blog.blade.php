@extends('site1ru/header')

@section('content')


    <div class="sub-page-content">

        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-wrapper clearfix">
                    <h2 class="bordered light">Новости<span> нашего центра</span></h2>



                    @foreach($News as $key => $value)


                        <article class="blog-item blog-full-width">
                            <div class="blog-thumbnail">
                                <img alt="{{$value['name']}}" src="{{$value['avatar']}}">
                            </div>
                            <div class="blog-full-width-date">
                                <p class="day">{{date('d',strtotime($value['created_at']))}}</p><p class="monthyear">
                                    {{date('m : Y',strtotime($value['created_at']))}}</p>
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><a href="/blog/{{$value['id']}}">{{$value['name']}}</a></h4>
                                <p class="blog-meta">Теги: {{$value['tag']}}</p>

                                <div>
                                {!! explode('<!--more-->', $value['content'])[0]  !!}
                                <div>

                                <a href="/blog/{{$value['id']}}" class="btn btn-default btn-mini btn-rounded">Читать</a>
                            </div>
                                    </div>
                        </article>


                    @endforeach

                    {!! $News->render(); !!}


                </div>
                <aside class="col-md-4">
                    <div class="sidebar-widget">
                        <div class="search clearfix">
                            <form method="get" action="#.">
                                <input type="text" placeholder="Поиск...">
                                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>



                </aside>
            </div>
        </div>



        <div class="clr"></div>
    </div><!--end sub-page-content-->



@endsection