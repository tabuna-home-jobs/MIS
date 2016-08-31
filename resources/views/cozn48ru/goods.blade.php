@extends('cozn48ru/header')

@section('title', $Goods['title'])
@section('description', $Goods['descript'])
@section('keywords', $Goods['tag'])
@section('avatar', $Goods['avatar'])

@section('content')
    <div class="page-content">
        <div class="container">
            <h1>{{$Goods['name']}}</h1>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/service/">Услуги</a></li>
                <li>{{$Goods->name}}</li>
            </ul>
            <div class="page-text">
                {!! $Goods['text'] !!}
            </div>
        </div>
    </div>
    <div class="skidki">
        <br>

        <h2>СКИДКИ И АКЦИИ</h2>

        <div class="sk">
            <div class="container">

                @foreach($shares as $item)
                    <div class="sk1 col-xs-12 col-md-12 col-sm-12 col-lg-4">
                        <a href="/shares/{{$item['id']}}">
                            <img src="{{$item['avatar']}}" alt="{{$item['name']}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
    </div>
@endsection
