@extends('luchiki48ru/header')

@section('content')

    <div class="page-content">
        <div class="container">
            <h1>{{$Good['name']}}</h1>
            <!-- <img class="img-rounded" alt="" src="{{$Good['avatar']}}"> -->
            <div class="page-text">
                {!! $Good['text'] !!}
            </div>
        </div>

    </div>



@endsection