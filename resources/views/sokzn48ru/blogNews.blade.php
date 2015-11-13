@extends('sokzn48ru/headerPage')
@section('content')
    <div class="page-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a> <span class="divider"></span></li>
                <li><a href="/blog">Новости</a> <span class="divider"></span></li>
                <li class="active">{{$New['name']}}</li>
            </ul>
            <h1>{{$New['name']}}</h1>
            <div class="page-text">
                {!! $New['content'] !!}
            </div>
        </div>
    </div>
@endsection