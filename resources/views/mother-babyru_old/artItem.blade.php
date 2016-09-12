@extends('karta-uspeharu/headerPage')
@section('content')
    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li><a href="/art">Полезная информация</a> <span class="divider"></span></li>
                <li class="active">{{$art['name']}}</li>
            </ul>
            <h1>{{$art['name']}}</h1>
            <div class="page-text">
                {!! $art['content'] !!}
            </div>
        </div>
    </div>
@endsection