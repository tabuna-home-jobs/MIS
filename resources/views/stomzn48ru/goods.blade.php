@extends('stomzn48ru/headerPage')



@section('title', $Good->title)
@section('description', $Good->descript)
@section('keywords', $Good->tag)
@section('avatar', $Good->avatar)






@section('content')

    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li><a href="/service">Наши услуги</a> <span class="divider"></span></li>
                <li class="active">{{$Good['name']}}</li>
            </ul>
            <h1>{{$Good['name']}}</h1>
            <div class="page-text">
                <div class="good-img"><img src="{{$Good['avatar']}}"></div>
                {!! $Good['text'] !!}
            </div>
        </div>
    </div>

@endsection