
@extends('luchiki48ru/header')
@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">{{$Article['name']}}</h1>
            <div class="page-text padding-top-35">
                {!! $Article['content'] !!}
            </div>
        </div>
    </div>
@endsection
