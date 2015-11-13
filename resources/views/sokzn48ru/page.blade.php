@extends('stomzn48ru/headerPage')
@section('content')
<div class="page-content">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a> <span class="divider"></span></li>
            <li class="active">{{$Page['name']}}</li>
        </ul>
        <h1>{{$Page['name']}}</h1>
        <div class="page-text">
            {!! $Page['content'] !!}
        </div>
    </div>
</div>
@endsection