@extends('cozn48ru/header')

@section('title', $Shares['title'])
@section('description', $Shares['descript'])
@section('keywords', $Shares['tag'])
@section('avatar', $Shares['avatar'])

@section('content')
    <div class="page-content">

        <div class="container">
            <h1>{{$Shares['name']}}</h1>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/shares/">Акции</a></li>
                <li>{{$Shares->name}}</li>
            </ul>
            <div class="page-text">
                {!! $Shares['content'] !!}
            </div>
        </div>

    </div>
    <div class="news">
        <h2>НОВОСТИ</h2>

        <div class="container">

            @foreach(newsOnMain::getNews(6,4) as $item)

                <div class="news1 col-md-3 col-sm-6 col-xs-12">
                    <img src="{{$item['avatar']}}" alt="{{$item['name']}}">
                    <div class="s1"><a href="/blog/{{$item['id']}}">{{$item['name']}}</a></div>

                    <div class="textnews1">
                        {{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}
                    </div>
                    <div class="date1">
                        {{$item['created_at']}}
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection
