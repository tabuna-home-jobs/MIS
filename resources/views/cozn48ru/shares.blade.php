@extends('cozn48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1>Акции центра Остеопатии</h1>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Акции</li>
            </ul>
            <div class="page-text">
                <div class="row">
                    @foreach($Shares as $item)
                        <div class="col-md-4">
                            <div class="share-item">
                                <div class="share-item-img" ><img src="{{$item['avatar']}}" alt=""></div>
                                <h3>{{$item['name']}}</h3>
                                <div>{{str_limit((strip_tags($item['content'])), $limit = 130, $end = '...')}}</div>
                                <div class="seeall"><img src="/cozn48.ru/img/minibutton.png"><a href="/shares/{{$item['id']}}">Посмотреть акцию</a><br></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>


    <div class="news">
        <h2>НОВОСТИ</h2>

        <div class="container">

            @foreach(newsOnMain::getNews(6,4) as $item)

                <div class="news1 col-md-3 col-sm-6 col-xs-12">
                    <img src="{{$item['avatar']}}">
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
<style>
    .share-item-img {
        background-color: #AE0237;
        text-align: center;
        padding: 10px;
    }
    .share-item-img img {
        max-width: 100%;
    }
</style>
