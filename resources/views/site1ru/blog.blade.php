@extends('site1ru/header')

@section('content')


    <div class="sub-page-content">

        <div class="container"><h2 class="bordered light">Новости<span> нашего центра</span></h2>

            <div class="row blog-wrapper">

                @foreach($News as $key => $value)

                    <div class="col-md-6 clearfix">
                        <article class="blog-item blog-full-width">
                            <div class="blog-thumbnail">
                                <img alt="{{$value['name']}}" src="{{$value['avatar']}}">
                        </div>
                            <div class="blog-full-width-date">
                                <p class="day">{{date('d',strtotime($value['created_at']))}}</p>

                                <p class="monthyear">
                                    {{date('m : Y',strtotime($value['created_at']))}}</p>
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><a href="/blog/{{$value['id']}}">{{$value['name']}}</h4>

                                <p class="blog-meta">Теги: {{$value['tag']}}</p>

                                <div>
                                    {!! explode('<!--more-->', $value['content'])[0] !!}
                                </div>

                                <a href="/blog/{{$value['id']}}" class="btn btn-default btn-mini btn-rounded">Читать</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>


            <div class="row">{!! $News->render(); !!}</div>

        </div>
    </div>

@endsection