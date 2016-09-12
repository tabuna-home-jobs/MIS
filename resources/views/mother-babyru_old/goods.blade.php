@extends('karta-uspeharu/headerPage')



@section('title', $Goods->title)
@section('description', $Goods->descript)
@section('keywords', $Goods->tag)
@section('avatar', $Goods->avatar)






@section('content')

    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li><a href="/service">Наши услуги</a> <span class="divider"></span></li>
                <li class="active">{{$Goods['name']}}</li>
            </ul>
            <h1>{{$Goods['name']}}</h1>
            <div class="page-text">
                <div class="good-img"><img src="{{$Goods['avatar']}}"></div>
                {!! $Goods['text'] !!}
            </div>
        </div>
    </div>

@endsection