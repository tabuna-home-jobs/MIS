@extends('sokzn48ru/headerPage')
@section('content')
    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li><a href="/shares">Акции и Новинки</a> <span class="divider"></span></li>
                <li class="active">{{$Shares['name']}}</li>
            </ul>
            <h1>{{$Shares['name']}}</h1>
            <div class="page-text">
                {!! $Shares['content'] !!}
            </div>
        </div>

    </div>
@endsection