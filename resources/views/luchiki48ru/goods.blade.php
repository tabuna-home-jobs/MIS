@extends('luchiki48ru/header')

@section('title', $Good['title'])
@section('description', $Good['descript'])
@section('keywords', $Good['tag'])
@section('avatar', $Good['avatar'])


@section('content')

    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">{{$Good['name']}}</h1>
            <!-- <img class="img-rounded" alt="" src="{{$Good['avatar']}}"> -->
            <div class="page-text padding-top-35">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/service/">Услуги</a></li>
                    <li>{{$Good->name}}</li>
                </ul>
                {!! $Good['text'] !!}
            </div>
        </div>

    </div>



@endsection
