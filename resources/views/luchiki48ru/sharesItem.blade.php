@extends('luchiki48ru/header')

@section('title', $Shares['title'])
@section('description', $Shares['descript'])
@section('keywords', $Shares['tag'])
@section('avatar', $Shares['avatar'])

@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="blueText center">{{$Shares['name']}}</h1>
            <div class="page-text padding-top-35">
                {!! $Shares['content'] !!}
            </div>
        </div>

    </div>
@endsection
