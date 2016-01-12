@extends('zdorovie48ru/header')

@section('content')


    <div class="sub-page-content">

        <div class="container"><h2 class="bordered light">Новости<span> нашего центра</span></h2>

            <div class="row blog-wrapper">



                <div class="col-sm-12 col-md-6 clearfix">
                @foreach($News as $key => $value)
                   @if($key % 2 == 0)
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
                        @endif
                @endforeach
                </div>

                <div class="col-sm-12  col-md-6 clearfix">
                    @foreach($News as $key => $value)
                        @if($key % 2 != 0)
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
                        @endif
                    @endforeach
                </div>



            </div>


            <div class="row text-center">{!! $News->render() !!}</div>

        </div>
    </div>











@endsection