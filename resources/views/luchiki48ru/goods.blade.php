@extends('luchiki48ru/header')










@section('content')

    <div class="page-content">
        <div class="container">
            <h1>{{$Goods['name']}}</h1>
            <a class="fancybox" href="{{$Goods->avatar}}"><img class="img-rounded" alt="" src="{{$Goods->avatar}}"></a>
            <div class="page-text">
                {!! $Goods['text'] !!}
            </div>
        </div>

    </div>



@endsection